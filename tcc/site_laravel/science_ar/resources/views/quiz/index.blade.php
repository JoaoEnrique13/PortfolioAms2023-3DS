{{-- 
    "PRA QUE SERVE
    TANTO CÓDIGO
    SE A VIDA
    NÃO É PROGRAMADA
    E AS MELHORES COISAS
    NÃO TEM LÓGICA". 
    Algúem (algum ano)
--}}

@extends('layouts.main')
@section('title', 'Science Ar - Quizzes')

@section('content')
<body>

    {{-- Menu --}}
    @include('layouts/menu')
    @php
        //VERIFICA SE É ADMIN
        $isAdmin = 0;
        if(auth()->check()){
            $user_controller = app(App\Http\Controllers\AdminController::class);
            $isAdmin = $user_controller->isAdmin(auth()->user()->id);
        }
    @endphp
    <section class="container-main">
        <main>
            {{-- MENSAGEM DE CONTA CRIADA --}}
            @if(session()->has('conta-create-success'))
                <div class="alert alert-quizzes alert-success alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Conta Criada!</strong> Você já está logado e pode realizar um quiz abaixo.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- MENSAGEM DE QUIZ EDITADO --}}
            @if(session()->has('quiz-edit-success'))
                <div class="alert alert-quizzes alert-success alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Quiz Editado com sucesso!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- MENSAGEM DE QUIZ APAGADO --}}
            @if(session()->has('quiz-delete-success'))
                <div class="alert alert-quizzes alert-success alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Quiz Excluido com sucesso!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- MENSAGEM DE QUIZ NÃO APAGADO --}}
            @if(session()->has('quiz-delete-danger'))
                <div class="alert alert-quizzes alert-danger alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Erro ao excluir quiz!</strong> Não é possível apagar um quiz que já tenha sido respondido.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            

            <div style="position: relative;">
                <h3 class="titulo">Quiz</h3> 
                <p class="quantidade-quizzes">{{count($quizzes)}} questionários</p>
            </div>

            <div class="row row-quiz">
                {{-- Percorre todos os quizzes --}}
                @foreach ($quizzes as $quiz)
                    {{-- Card do quiz --}}
                    <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/quiz/{{$quiz->id_quiz}}">

                        {{--  Veririca se tem imagem --}}
                        @php 
                            $path = str_replace('../', "", $quiz->img_quiz);

                            if (file_exists($path)) {
                                $img_quiz = asset($quiz->img_quiz);
                            } else {
                                $img_quiz = asset('img/img_quiz/img_quiz.png');
                            }
                        @endphp
                        
                            {{-- IMAGEM DO QUIZ --}}
                            <div class="card-image @if ($isAdmin) card-quiz-admin @endif" style="background-image: url('{{$img_quiz}}')" onclick="showLink({{$quiz->id_quiz}})">
                                
                                {{-- SE FOR ADMIN, MOSTRA CRUD DO QUIZ --}}
                                @if ($isAdmin)
                                    <div class="conf-quiz" id="conf-quiz-{{$quiz->id_quiz}}" onclick="showLink({{$quiz->id_quiz}})">
                                        <div class="row" style="padding: 0 5px; justify-content: center;">
                                            <div class="col-6" style="display: flex; justify-content: center">
                                                <a href="/quiz/edit/{{$quiz->id_quiz}}" class="btn btn-quiz btnEditar">
                                                    Editar
                                                </a>
                                            </div>
                                            <div class="col-6" style="display: flex; justify-content: center">
                                                <a href="{{route('quiz.add_question', ['quiz_id' => $quiz->id_quiz])}}" class="btn btn-quiz btn-pourple">
                                                    Adicionar questão
                                                </a>
                                            </div>
                                            <div class="col-6" style="display: flex; justify-content: center; margin-top: 20px">
                                                <!-- Botão para abrir o modal -->
                                                <button type="button" class="btn btn-quiz btnApagar" data-bs-toggle="modal" data-bs-target="#confirm-delete-quiz-{{$quiz->id_quiz}}">
                                                    Excluir
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            {{-- Info do quiz --}}
                            <a class="link-card-quiz" href="/quiz/{{$quiz->id_quiz}}">
                                <div class="text-card-quiz">
                                    <h2 class="title">{{$quiz->title}}</h2>
                                    <p>{{$quiz->description}}</p>
                                    <p>{{$quiz->total_questions}} Questões</p>
                                </div>
                            </a>
                        </a>
                    </div>
                @endforeach

                {{-- Caso não tenha quiz cadastrado --}}
                @if($quizzes =='[]')
                    <div class="alert alert-warning" role="alert">
                        <strong>Nenhum Quiz foi cadastrado!</strong> Contate o administrador para cadastrar
                    </div>
                @endif
            </div>
        </main>
    </section>
    <script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>


    @foreach ($quizzes as $quiz)
        <!-- Modal de Confirmação de Exclusão -->
        <div class="modal fade" id="confirm-delete-quiz-{{$quiz->id_quiz}}" tabindex="-1" aria-labelledby="confirm-delete-quiz-{{$quiz->id_quiz}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirm-delete-quiz-{{$quiz->id_quiz}}">Confirmar Exclusão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza de que deseja excluir este quiz? Todos os usuários que responderam ao quiz perderão seu progresso.
                    </div>
                    <div class="modal-footer" style="flex-wrap: nowrap">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="width: 100%">
                            Cancelar
                        </button>
                        <!-- Adicione aqui o código para excluir o item -->
                        <a href="{{ route('quiz.delete', ['id' => $quiz->id_quiz]) }}" type="button" class="btn btn-danger btnApagar" style="width: 100%">
                            Excluir
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    
    {{-- BTN add quiz --}}
    @if ($isAdmin)
        <a href="{{route('quiz.create')}}" class="btn-add-quiz-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
            </svg>
        </a>
    @endif

    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection
