<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\QuizAnswered;
use App\Models\QuestionAnswered;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    //FORMULARIO PARA RESPONDER
    public function viewQuiz($id){
        // $questions = Question::where('id_quiz', $id)->inRandomOrder()->paginate(1);//Questões do quiz escolhido aleatorio
        $questions = Question::where('id_quiz', $id)->paginate(1);//Questões do quiz escolhido
        $total_questions = Question::all()->where('id_quiz', $id)->count();//Questões do quiz escolhido
        $answers = Answer::all();//todas as respostas
        
        $quiz = Quiz::all()->where('id_quiz', $id)->first();//Quiz escolhido
        //Caso o quiz selecionado não exista
        if(!$quiz){
            return view("errors.404");
        }
        //caso o quiz selecionado exista, redireciona para ele
        return view("quiz.quiz", ['quiz' => $quiz, 'questions' => $questions, 'answers' => $answers, 'total_questions' => $total_questions]);
    }
        
    //LISTA TODOS OS QUIZZES
    public function listQuiz(){
        //Lista quiz com inner join para quantidade de questões
        $quizzes = Quiz::select('quizzes.id_quiz', 'quizzes.title', 'quizzes.description', 'quizzes.img_quiz', DB::raw('count(questions.id_question) as total_questions'))
            ->leftJoin('questions', 'quizzes.id_quiz', '=', 'questions.id_quiz')
            ->groupBy('quizzes.id_quiz', 'quizzes.title', 'quizzes.description', 'quizzes.img_quiz')
            ->get();

        return view("quiz.index", ['quizzes' => $quizzes]);
    }
    
    // SALVA RESPOSTA DO QUIZ
    public function answerQuiz(Request $request){
        $total_questions = Question::all()->where('id_quiz',  $request->id_quiz)->count();//Questões do quiz escolhido
        $answers_correct = []; //respostas certas do banco
        $answers_correct_user = 0; //respostas certas do usuario
        $questions = Question::all()->where('id_quiz',  $request->id_quiz);//Questões do quiz escolhido
        
        $validated = $request->validate([
            'resposta' => 'required',
        ]);

        //pega apenas as respostas certas do quiz selecionado
        foreach ($questions as $question) {
            $answers = Answer::where('id_question', $question->id_question)
                ->where('correct', 1)
                ->get();
            
            foreach ($answers as $answer) {
                $answers_correct[] = $answer->id_answer;
            }
        }

        // Recupera as respostas da sessão
        // $respostas = $request->session()->get('respostas', []);

        $quizKey = 'respostas_' . $request->id_quiz;
        $respostas = $request->session()->get($quizKey, []);

        
        // Adiciona a resposta atual ao array de respostas
        $respostas[$request->input('page')] = $request->input('resposta');
        
        // Armazena as respostas atualizadas na sessão
        $request->session()->put('respostas_' . $request->id_quiz, $respostas);
        
        //Avançar questão
        if ($request->input('button-clicked') === 'next') {
            $next_page = $request->input('page') + 1; //avanca contador
            return redirect("/quiz/$request->id_quiz?page=$next_page"); //redireciona para proxima pagina
        }

        //Ultima pergunta
        if ($request->input('button-clicked') === 'submit') {
            //Verifica se já respondeu o quiz
            $quiz_answered = QuizAnswered::where('id_user', auth()->user()->id)
                ->where('id_quiz',  $request->id_quiz)
                ->first();

            //Caso já tenha respondido o quiz, atualiza resposta
            if($quiz_answered){
                //Atualiza o Quiz
                $quiz_answered->id_quiz = $request->id_quiz;
                $quiz_answered->id_user = auth()->user()->id;
                $quiz_answered->save();

                //PERGUNTAS
                //Percorre todas as respostas
                
                //Pega as questões respondidas do quiz
                $questions_answered = QuestionAnswered::where('id_quiz_answered', $quiz_answered->id_quiz_answered)->get();

                $cont_answers = 1;//contador das respostas

                //Percorre todas as questões
                foreach ($questions_answered as $question_answered) {

                    //Atualiza Resposta
                    DB::table('questions_answered')
                        ->where('id_quiz_answered', '=', $quiz_answered->id_quiz_answered)
                        ->where('id_question_answered', $question_answered->id_question_answered)
                        ->update([
                            'id_quiz_answered' => $quiz_answered->id_quiz_answered,
                            'id_answer' => $respostas[$cont_answers],
                        ]);

                        $cont_answers++;//contador das resposts
                }
            }
            
            //Caso não tenha respondido o quiz, salva resposta
            else{
                //Cria o Quiz Respondido
                $quiz_answered = QuizAnswered::create([
                    'id_quiz' => $request->id_quiz,
                    'id_user' => auth()->user()->id,
                ]);
                
                //PERGUNTAS
                //Percorre todas as respostas
                foreach ($respostas as $resposta){

                    //Cria resposta da pergunta
                    QuestionAnswered::create([
                        'id_quiz_answered' => $quiz_answered->id_quiz_answered,
                        'id_answer' => $resposta
                    ]);
            }
        }
            
            $i = 1;//contador das respostas

            //verifica quantidade de acertos (foreach por todas as respostas certas)
            foreach($answers_correct as $answer_correct){

                //caso resposta certa tenha o mesmo id que a resposta escolhida
                if($answer_correct == $respostas[$i]){
                    $answers_correct_user += 1;//aumenta quantidade de acertos
                }
                $i++;
            }

            //Redireciona para pagina de resultado
            // return redirect()->route('quiz.result_quiz')->with([
            //     'answers_correct_user' => $answers_correct_user,
            //     'total_questions' => $total_questions,
            //     'id_quiz' => $request->id_quiz,
            // ]);

            // return redirect()->route('quiz.result_quiz',[
            //     'answers_correct_user' => $answers_correct_user,
            //     'total_questions' => $total_questions,
            //     'id_quiz' => $request->id_quiz,
            // ]);

        //     return redirect()->route('quiz.result_quiz')
        // ->with('answers_correct_user', $answers_correct_user)
        // ->with('total_questions', $total_questions)
        // ->with('id_quiz', $request->id_quiz);

            return $this->resultQuiz($answers_correct_user, $total_questions, $request->id_quiz);
            
        }
    }

    //PROGRESSO
    public function viewQuizAnswered(){
        $quizzes = DB::table('quizzes')
            ->select(
                'quizzes.id_quiz',
                'quizzes.title',
                'quizzes.img_quiz',
                DB::raw('count(quizzes_answered.id_quiz_answered) AS total_questions'),
                DB::raw('(SELECT COUNT(*) FROM questions_answered qa
                    INNER JOIN quizzes_answered qaqa ON qa.id_quiz_answered = qaqa.id_quiz_answered
                    INNER JOIN answers a ON qa.id_answer = a.id_answer
                    INNER JOIN questions q ON a.id_question = q.id_question
                    INNER JOIN quizzes qu ON q.id_quiz = qu.id_quiz
                    WHERE qu.id_quiz = quizzes.id_quiz
                    AND a.correct = 1
                    AND qa.id_answer IN (
                        SELECT a.id_answer
                        FROM answers a
                        INNER JOIN questions q ON a.id_question = q.id_question
                        INNER JOIN quizzes qu ON q.id_quiz = qu.id_quiz
                    )) AS total_acertos')
            )
            ->join('quizzes_answered', 'quizzes.id_quiz', '=', 'quizzes_answered.id_quiz')
            ->leftJoin('questions_answered', 'quizzes_answered.id_quiz_answered', '=', 'questions_answered.id_quiz_answered')
            ->where('quizzes_answered.id_user', '=', 2)
            ->groupBy('quizzes.id_quiz', 'quizzes.title', 'quizzes.img_quiz')
            ->get();
            
        return view("quiz.progress", ['quizzes' => $quizzes]);
    }

    // VIEW DE RESULTADO DO QUIZ
    public function resultQuiz($answers_correct_user, $total_questions, $id_quiz){
        // $answers_correct_user = session('answers_correct_user'); //quantidade de resposta correta do usuario
        // $total_questions = session('total_questions'); //total de questão do quiz
        // $id_quiz = session('id_quiz'); //id do quiz
        
        if(!$id_quiz){
            return redirect()->route('quiz.progress');
        }
        //view com quantidade de acertos
        return view('quiz.result_quiz', ['answers_correct_user' => $answers_correct_user, 'total_questions' => $total_questions, 'id_quiz' => $id_quiz]);
    }
}
