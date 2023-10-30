<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Student;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizAnswered;
use App\Models\QuestionAnswered;
use App\Models\Answer;

class AdminController extends Controller
{

    // CRIA QUIZ
    public function createQuiz(Request $request){
        try {
            // Valida dados
            $dados = $request->validate([
                'title' => ['required', 'string', 'min:3', 'max:100'],
                'description' => ['required', 'string', 'min:3', 'max:150'],
                'img' => ['file', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Adicionei 'image' e 'mimes' para validar como uma imagem
            ]);

            //pega id do admin logado
            $admin = Admin::select('id_admin')->where('id_user', auth()->user()->id)->first();

            // Cria Quiz com imagem padrão
            $quiz = Quiz::create([
                'id_admin' => $admin->id_admin,
                'title' => $request->title,
                'description' => $request->description,
                'img_quiz' => '../img/img_quiz/img_quiz.png',
            ]);

            // CASO TENHA IMAGEM NO QUIZ
            if($request->hasFile('img') ){
                if($request->file('img')->isValid()){
                    $img = $request->img; //pega imagem do campo
                    $imgName = $quiz->id_quiz . ".png"; //nome para salvar imagem (id_quiz.png)
                    $path = public_path('img/img_quiz'); //caminho para salvar imagem localhost (public/img/img_quiz)
                    //$path = public_path('../img/img_quiz'); //caminho para salvar imagem hospedagem (img/img_quiz)
                    $request->img->move($path, $imgName);//salva imagem
                    $img_path =  "img/img_quiz/" . $imgName;//caminho para salvar no banco

                    //muda imagem no banco para o caminho da imagem salva
                    $quiz->update([
                        'img_quiz' => $img_path,
                    ]);

                //erro na imagem
                }else{
                    return redirect('/' . auth()->user()->user_name)->with('danger', 'Não foi possível alterar imagem!');
                }
            }

            //retorna para listagem dos quizzes
            return redirect()->route('quiz.add_question', ['quiz_id' => $quiz->id_quiz])->with('quiz-create-success', '');
        }catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        }
    }

    // EDITAR QUIZ
    public function updateQuiz(Request $request){
        $quiz = Quiz::where('id_quiz', $request->id_quiz)->get()->first();
        $total_questions = Question::all()->where('id_quiz', $request->id_quiz)->count();//Questões do quiz escolhido

        //valida dados
        $dados = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);
        
        //atualiza quiz
        $quiz->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // CASO TENHA IMAGEM NO QUIZ
        if($request->hasFile('img') ){
            if($request->file('img')->isValid()){
                $img = $request->img; //pega imagem do campo
                $imgName = $quiz->id_quiz . ".png"; //nome para salvar imagem (id_quiz.png)
                $path = public_path('img/img_quiz'); //caminho para salvar imagem localhost (public/img/img_quiz)
                //$path = public_path('../img/img_quiz'); //caminho para salvar imagem hospedagem (img/img_quiz)
                $request->img->move($path, $imgName);//salva imagem
                $img_path =  "img/img_quiz/" . $imgName;//caminho para salvar no banco

                //muda imagem no banco para o caminho da imagem salva
                $quiz->update([
                    'img_quiz' => $img_path,
                ]);

            //erro na imagem
            }else{
                return redirect('/' . auth()->user()->user_name)->with('danger', 'Não foi possível alterar imagem!');
            }
        }
      
        // CASO NAO TENHA PERGUNTA REDIRECINA PARA TODOS OS QUIZZES
        if($total_questions <=0){
            return redirect()->route('quiz.list')->with('quiz-edit-success', '');
        }else{ //caso tenha mais pergunta passa para a próxima
            return redirect('/question/' . $quiz->id_quiz . '/edit')->with('quiz-create-success', '');
        }
    }

    // APAGAR QUIZ
    public function deleteQuiz($id){
        $quiz = Quiz::where('id_quiz', $id)->first(); //seleciona quiz
        $questions = Question::where('id_quiz', $id)->get(); //seleciona perguntas do quiz
        $quizzes_answered = QuizAnswered::where('id_quiz', $id)->get(); //verifica se quiz foi respondido

        // CASO O QUIZ JÁ TENHA SIDO RESPONDIDO, RETORNA ERRO
        if($quizzes_answered){
            //percorre todos os quizzes respondidos
            foreach($quizzes_answered as $quiz_answered){
                $questions_answered = QuestionAnswered::where('id_quiz_answered', $quiz_answered->id_quiz_answered)->get(); //pega respostas do quiz respondido

                //percorre todas as respostas do quiz respondido
                foreach($questions_answered as $question_answered){
                    $question_answered->delete(); //apaga resposta do quiz respondido
                }

                $quiz_answered->delete(); //apaga quiz respondido
            }
        }

        //percorre todas as perguntas do quiz
        foreach($questions as $question){
            $answers = Answer::where('id_question', $question->id_question)->get(); //seleciona resposta da pergunta

            //percorre todas as respostas da pergunta
            foreach($answers as $answer){
                if($answer){
                    $answer->delete(); //apaga cada resposta da pergunta
                }
            }
            if($question){
                $question->delete(); //apaga cada pergunta do quiz
            }
        }
      
      	$img_quizPath = public_path('img/img_quiz/' . $id . '.png'); //caminho da imagem localhost (public/img/img_quiz)
        //$img_quizPath = public_path('../img/img_quiz/' . $id . '.png'); //caminho da imagem hospedagem (img/img_quiz)

        //verifica se tem imagem
        if (file_exists($img_quizPath)) {
            unlink($img_quizPath); // Remove o arquivo
        }

        if($quiz){
            $quiz->delete(); //apaga quiz
        }
        return redirect()->route('quiz.list')->with('quiz-delete-success', '');
    }

    // CRIA QUESTÕES
    public function createQuestion(Request $request, $quiz_id){
        // Valida dados
        $dados = $request->validate([
            'text_question' => ['required', 'string']
        ]);

        //salva perguntas
        $question = Question::create([
            'id_quiz' => $quiz_id,
            'text_question' => $request->input('text_question'),
        ]);
        
        //percorre todas as respostas
        foreach ($request->input('answers') as $answerData) {
            //cria uma nova resposta
            $answer = new Answer([
                'text_answer' => $answerData['text_answer'],
                'correct' => isset($answerData['correct_answer']),
            ]);
    
            //salva resposta com id da questão
            $question->answers()->save($answer);
        }

        //retorna para adicionar outra questão
        return redirect()->route('quiz.add_question', ['quiz_id' => $quiz_id])->with('question-create-success', '');
    }

    // EDITAR QUESTÃO
    public function updateQuestion(Request $request){
        $question = Question::where('id_question', $request->id_question)->get()->first();
        $quiz = Quiz::all()->where('id_quiz', $request->id_quiz)->first();//Quiz da pergunta escolhida
        $total_questions = Question::all()->where('id_quiz', $request->id_quiz)->count();//Questões do quiz escolhido
        $answers_question = Answer::where('id_question', $question->id_question)->get();//Resposta da questão escolhida

        // Valida dados
        $dados = $request->validate([
            'text_question' => ['required', 'string']
        ]);

        //atuliza pergunta
        $question->update([
            'text_question' => $request->text_question
        ]);

        // REsposta do usuário
        $user_questions = $request->input('answers');


        // Obtém os IDs das respostas no banco de dados
        $answerIdsInDatabase = $answers_question->pluck('id_answer')->toArray();

        // Encontra as respostas no banco de dados que não estão no array
        $answersToDelete = $answers_question->reject(function ($answer) use ($user_questions) {
            return in_array($answer->id_answer, array_column($user_questions, 'id_answer'));
        });

        // Apaga as respostas que não estão no array
        foreach ($answersToDelete as $answer) {
            QuestionAnswered::where('id_answer', $answer->id_answer)->delete();//caso a resposta tenha sido escolhida pelo usuario, apaga a mesma
            $answer->delete();
        }


        //apaga todas as resposta para adicionar novas
        // foreach($answers_question as $answer_question){
        //     if($answer_question){
        //         // $answer_question->delete();
        //     }
        //     return $answers_question;
        // }

        // return $request->input('answers');


        //percorre todas as respostas da pergunta
        foreach ($request->input('answers') as $answerData) {

            //caso a resposta já exista no banco
            if(isset($answerData['id_answer']) && $answerData['id_answer']){  

                //seleciona resposta no banco para atualizar
                $update_answer = Answer::where('id_answer', $answerData['id_answer'])->first();

                //atualiza resposta
                $update_answer->update([
                    'text_answer' => $answerData['text_answer'],
                    'correct' => isset($answerData['correct_answer']),
                ]);

            //caso seja uma nova resposta
            }else{
                //CRIA RESPOSTA
                $answer = new Answer([
                    'text_answer' => $answerData['text_answer'],
                    'correct' => isset($answerData['correct_answer']),
                ]);

                $question->answers()->save($answer); //salva resposta
            }
        }

        //aumenta contador de pergunta para ir pra próxima
        $question_number =  $request->question_number + 1;

        //se tiver mais pergunta, passa pra próxima
        if($question_number >= $total_questions){
            return redirect()->route('quiz.list')->with('quiz-edit-success', '');
        }
        
        //se não tiver mais pergunta, mostra quizzes
        return redirect('/question/' . $request->id_quiz .'/edit?question_number=' . $question_number)->with('answer-create-success', '');
    }

    // CRIA USUÁRIO - ADMIN
    public function createAdmin(Request $request){
        try{
            // validar dados
            $dados = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
            ]);

            $dados = $request->only(['name', 'email', 'password']);
            $dados['password'] = Hash::make($dados['password']);

            //cria usuário
            $user = User::create($dados);
            $user->update(['img' => 'img/img_account/img_account.png']);

            //cria admin
            $student = Admin::create([
                'id_user' => $user->id,
            ]);

            return redirect()->route('list_admins')->with('admin-create-success', '');
        }catch(Excpetion $e){
            return redirect()->route('admin.create')->with('admin-create-danger', '');
        }
    }

    // VERIFICA SE É ADMIN
    public function isAdmin($id_user){
        $admin = Admin::where('id_user', $id_user)->get()->count();
        return $admin;
    }

    // LISTAR ADMINS
    public function listAdmins(){
        $admins = User::select('users.id', 'users.name', 'users.email', 'users.img')
            ->join('admins', 'users.id', '=', 'admins.id_user')
            ->get();
        return view('admin.list_admins', ['admins' => $admins]);
    }

    // LISTAR ALUNOS
    public function listStudents(){
        $students = User::select('users.id', 'users.name', 'users.email', 'users.img')
            ->join('students', 'users.id', '=', 'students.id_user')
            ->get();
        return view('admin.list_students', ['students' => $students]);
    }

    // VIEW DE ADICIONAR QUESTÕES
    public function viewAddQuestion($quiz_id){
        $quiz = Quiz::where('id_quiz', $quiz_id)->get()->first(); //seleciona quiz pelo id

        // Caso não ache o quiz, redireciona para 404
        if(!$quiz){
            return view("errors.404");
        }

        //retorna view de adicionar pergunta com o quiz escolhido
        return view('admin.add_question', compact('quiz'));
    }

    // VIEW DE EDITAR QUIZ
    public function editQuiz($id){
        $quiz = Quiz::all()->where('id_quiz', $id)->first();//Quiz escolhido
        $questions = Question::where('id_quiz', $id)->paginate(1);//Questões do quiz escolhido
        $answers = Answer::all();//todas as respostas

        return view('admin.edit_quiz', ['quiz' => $quiz, 'questions' => $questions, 'answers' => $answers]); //view de editar
    }

    // VIEW DE EDITAR QUESTOES
    public function editQuestion($id){
        $quiz = Quiz::all()->where('id_quiz', $id)->first();//Quiz escolhido
        $questions = Question::where('id_quiz', $id)->get();//Questões do quiz escolhido
        $total_questions = Question::all()->where('id_quiz', $id)->count();//Questões do quiz escolhido
        $answers = Answer::all();//todas as respostas
        
        //contador de pergunta
        if(isset($_GET['question_number']) && $_GET['question_number']){
            $question_number = $_GET['question_number'];
        }else{
            $question_number = 0;
            $_GET['question_number'] = 0;
        }

        //view de editar pergunta
        return view("admin.edit_question", ['quiz' => $quiz, 'questions' => $questions, 'answers' => $answers, 'total_questions' => $total_questions, 'question_number' => $question_number]);
    }
}
