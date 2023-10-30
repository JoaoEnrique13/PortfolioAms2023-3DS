<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// NAVEGAÇÃO
Route::get('/', [NavigationController::class, 'index'])->name('index'); //página Home
Route::get('/augmented-reality', [NavigationController::class, 'augmented_reality'])->name('augmented_reality');//realidade aumentada
Route::get('/about', [NavigationController::class, 'about'])->name('about');//sobre
Route::get('/quiz', [QuizController::class, 'listQuiz'])->name('quiz.list'); //lista todos os quizzes
Route::get('/page-not-found', [NavigationController::class, 'page_not_found'])->name('page_not_found'); //erro 404

// LISTAR MATERIAL
Route::get('/list-material', [NavigationController::class, 'list_material'])->name('list_material');// listar materiais
Route::get('/temperatura', [NavigationController::class, 'temperature'])->name('temperature');// temperatura
Route::get('/fenomenos', [NavigationController::class, 'fenomenos'])->name('fenomenos');// fenomenos da natureza
Route::get('/tectonic_plates', [NavigationController::class, 'tectonic_plates'])->name('tectonic_plates');// placas tectônicas
Route::get('/combustiveis_maquinas', [NavigationController::class, 'combustiveis_maquinas'])->name('combustiveis_maquinas');// combustiveis e maquinas termicas
Route::get('/solar_system', [NavigationController::class, 'solar_system'])->name('solar_system');// sistema solar
Route::get('/pantanal', [NavigationController::class, 'pantanal'])->name('pantanal');// bioma pantanal
Route::get('/amazonia', [NavigationController::class, 'amazonia'])->name('amazonia');// bioma amazonia
Route::get('/pampa', [NavigationController::class, 'pampa'])->name('pampa');// bioma pampa
Route::get('/cerrado', [NavigationController::class, 'cerrado'])->name('cerrado');// bioma cerrado
Route::get('/caatinga', [NavigationController::class, 'caatinga'])->name('caatinga');// bioma caatinga
Route::get('/mata_atlantica', [NavigationController::class, 'mata_atlantica'])->name('mata_atlantica');// bioma mata atlantica

//USUARIO NÃO LOGADO
Route::group(['middleware' => 'guest'], function () {
    // Login
    Route::get('/login', [NavigationController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login');

    // Criar conta
    Route::get('/register', [NavigationController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'createAccount'])->name('register');

    //esqueci senha
    Route::get('/forgot-password', [NavigationController::class, 'reset_password']);
    Route::post('/forgot-password', [UserController::class, 'resetPassword'])->name('user.reset_password');

    Route::get('/reset-password/{token}', function (string $token) {
        return view('user.reset-password', ['token' => $token]);
    })->name('password.reset');

    Route::post('/reset-password', [UserController::class, 'updatePassword'])->name('password.update');

    Route::view('/email/reset-password', 'emails.reset_password')->name('email.password_reset');

});

//USUARIO LOGADO
Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');//sair da conta
    Route::get('/account', [UserController::class, 'viewAccount'])->name('account');//visualizar da conta

    Route::get('/delete-account/{id}', [UserController::class, 'deleteAccount'])->name('user.delete');//deletar conta
    Route::post('/update-account', [UserController::class, 'updateAccount'])->name('account.update');//usuário logado apaga sua conta
    Route::post('/update-img', [UserController::class, 'updateImgAccount'])->name('account.update_img');//usuário logado apaga sua conta

    // SÓ ADMIN PODE ACESSAR
    Route::middleware('admin')->group(function () {
        //REDIRECIONAMENTO DOS QUIZZES (Admin)
        Route::get('/quiz/create', [NavigationController::class, 'create_quiz'])->name('quiz.create');//view de CRIAR QUIZ
        Route::post('/quiz/store', [AdminController::class, 'createQuiz'])->name('quiz.store');//funcao CRIAR QUIZ
        Route::get('/quiz/delete/{id}', [AdminController::class, 'deleteQuiz'])->name('quiz.delete');//APAGAR QUIZ
        Route::get('/quiz/edit/{id}', [AdminController::class, 'editQuiz'])->name('quiz.edit');//view EDITAR QUIZ
        Route::post('/quiz/edit', [AdminController::class, 'updateQuiz'])->name('quiz.edit');//funcao EDITAR QUIZ
        
        Route::get('/question/{id}/edit/', [AdminController::class, 'editQuestion'])->name('question.edit');//view EDITAR QUESTION
        Route::post('/question/edit', [AdminController::class, 'updateQuestion'])->name('question.edit');//funcao EDITAR QUESTION

        //adiciona resposta
        Route::get('/quiz/{quiz_id}/add-question', [AdminController::class, 'viewAddQuestion'])->name('quiz.add_question');//VIEW ADICIONAR QUESTÃO
        Route::post('/quiz/{quiz_id}/store-question', [AdminController::class, 'createQuestion'])->name('quiz.store_question');//SALVA QUESTÃO

        //listagem de usuário
        Route::get('/list-admins', [AdminController::class, 'listAdmins'])->name('list_admins');//LISTAR ADMINS
        Route::get('/list-students', [AdminController::class, 'listStudents'])->name('list_students');//LISTAR ALUNOS
        Route::get('/create-admin', [NavigationController::class, 'create_admin'])->name('admin.create');//VIEW CRIAR ADMIN
        Route::post('/create-admin', [AdminController::class, 'createAdmin'])->name('admin.create');//CRIAR ADMIN
    });


    //REDIRECIONAMENTO DOS QUIZZES (User)
    Route::get('/quiz/progress', [QuizController::class, 'viewQuizAnswered'])->name('quiz.progress');//Progresso do usuário

    Route::get('/quiz-answered', [QuizController::class, 'quizAnswered'])->name('quiz.quiz_answered');//mostra quiz respondido
    Route::get('/quiz/{id}', [QuizController::class, 'viewQuiz'])->name('quiz.quiz'); //Quiz escolhido pelo ID para responder
    Route::post('/quiz/submit', [QuizController::class, 'answerQuiz'])->name('quiz.submit');//envia quiz ou atualiza resultado
});