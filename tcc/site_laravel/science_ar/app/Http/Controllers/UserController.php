<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Student;
use App\Models\QuizAnswered;
use App\Models\QuestionAnswered;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Admin;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use App\Mail\ResetPasswordMail;
use Illuminate\Mail\Message; // Importe a classe Message correta

class UserController extends Controller
{
    // CRIA USUÁRIO - Aluno
    public function createAccount(Request $request){
        // validar dados
        $dados = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $dados = $request->only(['name', 'email', 'password']);
        $dados['password'] = Hash::make($dados['password']);

        // print_r($dados['password']);
        $user = User::create($dados);
        $user->update(['img' => 'img/img_account/img_account.png']);

        //cria aluno
        $student = Student::create([
            'id_user' => $user->id,
        ]);


        // FAZ LOGIN AO CADASTRAR
        $login = $request->only(['email', 'password',]);

        if (Auth::attempt($login, 1)) {
            User::where('email', $request->email)->get()->first(); //usuario que acabou de logar

            $request->session()->regenerate();
            return redirect()->route('quiz.list')->with('conta-create-success', '');
        }

         return redirect()->route('login')->with('conta-create-danger', '');
    }

    // ABRIR CONTA
    public function viewAccount(){
        return view('user.account');
    }

    // ATUALIZAR CONTA
    public function updateAccount(Request $request){
        //valida dados
        $dados = $request->validate([
            'password' => ['required', 'string', 'min:8'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore(auth()->id())],
        ]);

        $dados['password'] = Hash::make($dados['password']); //criptografa senha

        $user = User::find(auth()->user()->id);//usuario logado
        $user->update($dados);//atualiza usuario

        return redirect()->route('account')->with('account-edit-success', '');
    }

    //APAGAR CONTA 
    public function deleteAccount($id){
        try{
            $id_user_logged =  auth()->user()->id; //id do usuario logado

            //Verifica se é admin ou student
            $student = Student::where('id_user', $id)->first();
            $admin = Admin::where('id_user', $id)->first();

            //Caso o usuário tenha respondido um quiz, ele apaga o quiz respondido
            $quizzes_answered = QuizAnswered::where('id_user', $id)->get();

            //Percorre todos os quizzes respondidos
            foreach($quizzes_answered as $quiz_answered){
                $questions_answered = QuestionAnswered::where('id_quiz_answered', $quiz_answered->id_quiz_answered)->get();//pega respostas escolhidas

                //precorre todas as respostas escolhidas
                foreach($questions_answered as $question_answered){
                    $question_answered->delete(); //apaga todas as respostas do quiz
                }
                $quiz_answered->delete();//apaga quiz respondido
            }

            // verifica se é aluno ou admin e apaga
            if($student){
                $student->delete();
            }else{
                if($admin){

                    
                    $quizzes = Quiz::where('id_admin', $admin->id_admin)->get();//pega quizzes criado pelo admin

                    // percorre todos os quizes criado pelo admin
                    foreach($quizzes as $quiz){
                        $quizzes_answered = QuizAnswered::where('id_quiz', $quiz->id_quiz)->get();//caso o quiz tenha sido respondido

                        //caso o quiz tenha sido respondido apaga as respostas
                        foreach($quizzes_answered as $quiz_answered){
                            $questions_answered = QuestionAnswered::where('id_quiz_answered', $quiz_answered->id_quiz_answered)->get();//pega respostas escolhidas
            
                            //precorre todas as respostas escolhidas
                            foreach($questions_answered as $question_answered){
                                $question_answered->delete(); //apaga todas as respostas do quiz
                            }
                            $quiz_answered->delete();//apaga quiz respondido
                        }


                        // Pega questões do quiz
                        $questions = Question::where('id_quiz', $quiz->id_quiz)->get();

                        // Percorre todas as questões
                        foreach($questions as $question){
                            $answers = Answer::where('id_question', $question->id_question)->get(); //pega cada resposta da questão

                            //percorre cada resposta da questão
                            foreach($answers as $answer){
                                $answer->delete(); //APAGA RESPOSTAS
                            }
                            $question->delete(); //APAGA QUESTÃO
                        }
                        $quiz->delete(); //APAGA QUIZ
                    }
                    $admin->delete(); //APAGA ADMIN
                }
            }
            
            $user = User::find($id)->delete(); //APAGA USUÁRIO

            //pega caminho da imagem do quiz
            $img_user_Path = public_path('img/img_account/' . $id . '.png'); //pega caminho da imagem localhost (public/img/img_account)
            //$img_user_Path = public_path('../img/img_account/' . $id . '.png'); //pega caminho da imagem hospedagem (img/img_account)

            //verifica se tem imagem
            if (file_exists($img_user_Path)) {
                unlink($img_user_Path); // Remove o arquivo
            }
    
            // Caso o usuário logado apague a propria conta
            if($id_user_logged == $id){
                return redirect()->route('login')->with('account-delete-success', '');
            }
            
            // Caso um Admin apague um aluno ou outro admin
            else{
                if($student){ // se for aluno
                    return redirect()->route('list_students')->with('account-delete-success', '');
                }else{ //se for admin
                    return redirect()->route('list_admins')->with('account-delete-success', '');
                }
            }

        }catch(Exception $e){
            return redirect()->route('login')->with('account-delete-danger', '');
        }
    }

    // FAZER LOGIN
    public function login(Request $request) {
        // validar dados
        $dados = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
    
        // Loga usuário
        if (Auth::attempt($dados, $request->filled('remember'))) {
            $request->session()->regenerate();
    
            // Redireciona o usuário para a URL originalmente solicitada ou para 'quiz.list'
            return redirect()->intended(route('quiz.list'));
        }
    
        //email ou senha errado
        return back()->withErrors(['password' => 'O email e/ou senha são inválidos'])->withInput();
    }

    // SAIR DA CONTA
    public function logout(Request $request){
        Auth::logout(); //sai da conta

        //remove sessão
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // ATUALIZAR CONTA
    public function updateImgAccount(Request $request){
        $user = User::find(auth()->user()->id); //usuario logado

        // CASO TENHA IMAGEM NO POST
        if($request->hasFile('img') ){
            if($request->file('img')->isValid()){
                $img = $request->img; //imagem do usuario
                $imgName = auth()->user()->id . ".png"; //nome da imagem (id_user.png)
                $path = public_path('img/img_account'); //caminho para salvar imagem localhost (public/img/img_account)
                //$path = public_path('../img/img_account'); //caminho para salvar imagem hospedagem (img/img_account)
                $request->img->move($path, $imgName); //salva imagem

                //atualiza caminho da imagem no banco
                $user->update([
                    'img' => "img/img_account/" . $imgName,
                ]);

                return redirect()->route('account')->with('img-edit-success', '');
            }else{
                return redirect()->route('account')->with('img-edit-danger', 'A imagem não está em um formato válido ou é muito grande');
            }
        }
            return redirect()->route('account')->with('img-edit-danger', 'Clique na sua imagem abaixo para trocar a foto de perfil');
    }

    public function resetPassword(Request $request){
        $request->validate(['email' => 'required|email']);
 
        $status = Password::sendResetLink(
            $request->only('email')
        );
 
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function updatePassword(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
     
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
