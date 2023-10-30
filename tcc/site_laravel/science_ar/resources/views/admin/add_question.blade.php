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
@section('title', 'Science Ar - Adicionar Pergunta {{ $quiz->title }}') <!-- titulo da pagina -->

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <div class="container-main">
        <main>
            {{-- MENSAGEM DE QUIZ CRIADO --}}
            @if(session()->has('quiz-create-success'))
                <div class="alert alert-quizzes alert-success alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Quiz criado!</strong> Agora você pode adicionar as perguntas e suas respostas.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
    
            {{-- MENSAGEM DE PERGUNTA CRIADO --}}
            @if(session()->has('question-create-success'))
                <div class="alert alert-quizzes alert-success alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Pergunta criada!</strong>  Veja todos os quizzes <a href="{{route('quiz.list')}}">aqui</a>, ou adicione outra questão abaixo.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h3 class="tituloCentralizado">Quiz - {{ $quiz->title }}</h3> <!-- Nome do quia -->

            <section class="text-center2" style="flex-direction: column!important; align-items: center;">
                <div class="cardLogin2 mx-md-5 shadow-5-strong">
                    
                    <!-- Formulario -->
                    <form action="{{ route('quiz.store_question', ['quiz_id' => $quiz->id_quiz]) }}" method="post">
                        @csrf
                        <div class="card-body card-edit-question">
                    
                            <div class="row d-flex justify-content-center">
                                <div class="col col-add-question">

                                    {{-- PERGUNTA --}}
                                        <div class="form-outline mb-4">
                                            <textarea required type="text" row="1" id="text_question" name="text_question" class="form-control formCriarQuiz @error('text_question') is-invalid @enderror" placeholder="Pergunta">{{ old('text_question') }}</textarea>
                                            @error('text_question')
                                                <span class="invalid-feedback" role="alert" style="text-align: left">
                                                        {{$message}}
                                                </span>
                                            @enderror
                                        </div>

                                        {{-- RESPOSTAS --}}
                                        <div id="answers" style="margin-bottom: 50px;">
                                            {{-- RESPOSTA 1 --}}
                                            <div class="row">
                                                <div class="col-9">
                                                    <input required placeholder="Resposta" type="text" name="answers[0][text_answer]" class="text-resposta form-control formCriarQuiz @error('answers[0][text_answer]') is-invalid @enderror">
                                                </div>
                                                <div class="col">
                                                    <div class="form-check form-switch">
                                                        <div class="form-check">
                                                            <input class="form-check-input form-radio" type="checkbox" name="answers[0][correct_answer]" data-answer-id="0" id="answers-0-correct" checked>
                                                            <label class="form-check-label label-correct" for="answers-0-correct">Correta</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            {{-- RESPOSTA 2 --}}
                                            <div class="row" style="margin-top: 10px">
                                                <div class="col-9">
                                                    <input required placeholder="Resposta" type="text" name="answers[1][text_answer]" class="text-resposta form-control formCriarQuiz @error('answers[1][text_answer]') is-invalid @enderror">
                                                </div>
                                                <div class="col">
                                                    <div class="form-check form-switch">
                                                        <div class="form-check">
                                                            <input class="form-check-input form-radio" type="checkbox" name="answers[1][correct_answer]" data-answer-id="1" id="answers-1-correct">
                                                            <label class="form-check-label label-correct" for="answers-1-correct">Correta</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        {{-- Adicionar Resposta --}}
                                        <button type="button" class="btn add-answer" id="add-answer">Adicionar Resposta</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-criar-quiz">Salvar</button>
                    </form>
            </section>
        </main>
    </div>
    {{-- URL das imagens (remover-questão) --}}
    <script>
        var baseUrl = "{{ asset('') }}";
    </script>

<script>
    // Obtém o elemento textarea
    var textarea = document.getElementById('text_question');
  
    // Define a altura inicial com base no conteúdo
    textarea.style.height = (textarea.scrollHeight) + 'px';
  
    // Adiciona um ouvinte de eventos para ajustar a altura quando o conteúdo é modificado
    textarea.addEventListener('input', function () {
      this.style.height = 'auto';
      this.style.height = (this.scrollHeight) + 'px';
    });
  </script>



    {{-- Footer --}}
    @include('layouts/footer')

    {{-- JQuery --}}
    <script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection


