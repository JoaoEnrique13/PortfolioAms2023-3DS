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
@section('title', 'Science Ar - Editar Pergunta {{ $quiz->title }}')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <div class="container-main">
        <main>
            {{-- MENSAGEM DE QUIZ CRIADO --}}
            @if(session()->has('quiz-create-success'))
                <div class="alert alert-quizzes alert-success alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Quiz Atualizado!</strong> Agora você pode atualizar as perguntas e suas respostas.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- MENSAGEM DE QUESTÃO EDITADA --}}
            @if(session()->has('question-create-success'))
                <div class="alert alert-quizzes alert-success alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Pergunta Atualizada!</strong> Você pode atualizar a próxima pergunta.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
    
            {{-- MENSAGEM DE PERGUNTA CRIADO --}}
            @if(session()->has('question-create-success'))
                <div class="alert alert-quizzes alert-success alert-dismissible alert-account-create fade show" role="alert">
                    <strong>Pergunta atualizada!</strong>  Veja todos os quizzes <a href="{{route('quiz.list')}}">aqui</a>, ou adicione outra questão abaixo.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h3 class="tituloCentralizado">Quiz - {{ $quiz->title }}</h3>
            <section class="text-center2" style="flex-direction: column!important; align-items: center;">
                <div class="cardLogin2 mx-md-5 shadow-5-strong">     
                    {{-- FORMULARIO --}}
                    <form action="{{ route('question.edit', ['quiz_id' => $quiz->id_quiz]) }}" method="post">
                        @csrf
                        <div class="card-body card-edit-question">
                            <div class="row d-flex justify-content-center">
                                <div class="col col-add-question">
                                    {{-- PERGUNTA --}}
                                    <div class="form-outline mb-4">
                                        <input type="hidden" name="id_question" id="id_question" value="{{$questions[$question_number]->id_question}}"> {{-- ID PERGUNTA --}}
                                        <input type="hidden" name="id_quiz" id="id_question" value="{{$quiz->id_quiz}}"> {{-- ID QUIZ --}}

                                        {{-- CAMPO DA PERGUNTA --}}
                                        <textarea required type="text" id="text_question" name="text_question" class="form-control formCriarQuiz @error('text_question') is-invalid @enderror" placeholder="Pergunta" value="">{{ $questions[$question_number]->text_question }}</textarea>
                                        @error('text_question') {{-- ERRO --}}
                                            <span class="invalid-feedback" role="alert" style="text-align: left">
                                                    {{$message}}
                                            </span>
                                        @enderror
                                    </div>
                                        @php
                                            $contador = 0;  //CONTADOR DE PERGUNTA
                                        @endphp


                                        <div id="answers" style="margin-bottom: 50px;">
                                            @foreach ($answers as $answer){{-- PERCORRE RESPOSTA DA PERGUNTA --}}
                                                @if ($questions[$question_number]->id_question == $answer->id_question) {{-- CASO PRESPOTA SEJA DA PERGUNTA --}}
                                                
                                                <div class="row answer-edit" data-total-question="{{$contador}}" id="answer-{{$contador}}" style="margin-top: 10px">
                                                    {{-- Campo de resposta --}}
                                                    <div class="col-9">
                                                        <input type="hidden" name="answers[{{$contador}}][id_answer]" value="{{$answer->id_answer}}"> {{-- ID RESPOSTA --}}
                                                        <input type="hidden" name="question_number" value="{{$_GET['question_number']}}"> {{-- NUMERO DA PERGUNTA --}}

                                                        {{-- RESPOSTA --}}
                                                        <input required value="{{$answer->text_answer}}" placeholder="Resposta" type="text" name="answers[{{$contador}}][text_answer]" class="text-resposta form-control formCriarQuiz @error('answers[{{$contador}}][text_answer]') is-invalid @enderror">
                                                    </div>

                                                    {{-- SELECIONAR CORRETA  --}}
                                                    <div class="col">
                                                        <div class="form-check form-switch">
                                                            <div class="form-check">
                                                                <input class="form-check-input form-radio" type="checkbox" name="answers[{{$contador}}][correct_answer]" data-answer-id="{{$contador}}" id="answers-{{$contador}}-correct" @if($answer->correct) checked @endif>
                                                                <label class="form-check-label label-correct" for="answers-{{$contador}}-correct">Correta</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- SE FOR >=3 PERGUNTA, DEIXA TIRAR RESPOSTA --}}
                                                    @if ($contador>=2)
                                                        <div class="col col-remove-answer">
                                                            <img src="{{asset('img/x.png')}}" data-answer="{{$contador}}" class="remove-answer-edit">
                                                        </div>
                                                    @endif
                                                    
                                                @php
                                                $contador += 1; //AUMENTA CONTADOR
                                            @endphp
                                                </div>
                                                @endif
                                                
                                            @endforeach
                                        </div>
                                        
                                        {{-- Mostra botão de adiciona resposta se tiver menos de 5 --}}
                                        @if ($contador <5)
                                            <button type="button" class="btn add-answer" id="add-answer-edit">Adicionar Resposta</button>
                                        @endif
                                        <button type="button" class="btn add-answer" id="add-answer-edit" style="display: none">Adicionar Resposta</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- SALVA PERGUNTA --}}
                        <button type="submit" class="btn btn-criar-quiz">Próximo</button>
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

    <script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection
