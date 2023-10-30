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
@section('title', 'Science Ar - Quiz ' . $quiz->title)

@section('content')
<body>

    {{-- Menu --}}
    @include('layouts/menu')
    <main class="QuizPerguntas">
        {{-- Contagem das perguntas --}}
        @php 
            $pergunta = 1;

            //Caso exista a variavel page, o numero da pergunta recebe esse valor
            if(isset($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <=$total_questions){
                $pergunta = $_GET['page'];
            }
            
            //caso nao exista a variavel, é a primeira pergunta
            else if(!isset($_GET['page'])){
                $pergunta =1;

            //caso nao tiver a pergunta com a variavel page redireciona para a pagina nao encontrada
            }else if(isset($_GET['page'])){
                redirect('page_not_found');
            }

            
            $next = $pergunta +1;
            $prev = $pergunta -1;
        @endphp

            
        <!-- Titulo do Quiz -->
        <h3 class="tituloCentralizado">{{ $quiz->title }}</h3>
        
        {{-- Caso o quiz não tenha pergunta --}}
        @if ($total_questions <=0)
            <div class="alert alert-warning" role="alert">
                <h4>Esse quiz ainda não tem perguntas!</h4>
            </div>
        @endif

        
        <form class="form-send-answer" id="form-quiz" action="{{ route('quiz.submit') }}" method="POST">
            <section class="conteudoQuizPerguntas">
                @csrf
                <input type="text" name="id_quiz" value="{{$quiz->id_quiz}}" style="display: none">{{-- ID do quiz --}}
                <input type="hidden" name="page" id="page" value="{{ $pergunta }}">{{-- número da pagina/pergunta --}}
                <input type="hidden" name="button-clicked" id="button-clicked"> {{--  Armazena qual btn foi usado (ultima pergunta ou proxima pergunta) --}}

                {{-- Perguntas e respostas --}}
                @foreach ($questions as $question)
                    {{-- Pergunta do quiz --}}
                    <p class="Pergunta">{{ $pergunta }}. {!! nl2br($question->text_question) !!}</p><br><br>

                    {{-- Mostrar com formatação do banco (quebra de linhas etc) --}}
                    {{-- {!! nl2br($texto_banco_de_dados) !!} --}}

                    @php
                        $percentage = $pergunta / $total_questions * 100;
                    @endphp
                    <progress class="progress-input" max="100" value="{{$percentage}}"></progress><br><br><br>

                    {{-- Respostas --}}
                    <div class="Respostas">
                        @foreach ($answers as $answer)
                            {{-- Caso a resposta seja da pergunta --}}
                            @if ($answer->id_question == $question->id_question)
                                <input class="input-resposta" style="display: none" type="radio" name="resposta" value="{{$answer->id_answer}}" id="{{$answer->id_answer}}"  {{ old('resposta') == $answer->id_answer ? 'checked' : '' }}>
                                <label class="AlternativasRespostas" for="{{$answer->id_answer}}">{!! nl2br($answer->text_answer) !!}</label><br>

                                {{-- RESPOSTA CORRETA --}}
                                @if($answer->correct)
                                    <input style="display: none" type="text" name="correct-answer" value="{{$answer->id_answer}}">
                                @endif
                            @endif
                        @endforeach
                    </div>
                @endforeach

                {{-- Caso o usuario não selecione uma resposta --}}
                @if ($errors->any())
                    <div class="alert alert-danger error-question">
                        @foreach ($errors->all() as $error)
                            Escolha uma resposta
                        @endforeach
                    </div>
                @endif

            </section>

            @if (!$total_questions <=0)
                <div class="Proximo">
                    {{-- Botões para enviar, voltar e avançar --}}
                    {{-- Caso esteja na ultima pergunta --}}
                    @if ($total_questions == $pergunta)
                        <button class="btn btnSobreNos btn-send-answer" id="btn-submit" name="action" value="submit">Enviar resposta</button>
                    @else
                        {{-- Botão para ir para a próxima --}}
                        {{-- <button class="btn btnSobreNos btn-send-answer" name="action" type="submit" value="next">Próximo</button> --}}
                        <button class="btn btnSobreNos btn-send-answer" id="btn-next" name="action" value="next">Próximo</button>
                    @endif
                </div>
            @endif
        </form>
    </main>

            
    <script>
        function verifyAnswer(event){
            event.preventDefault(); //impede de enviar form

            var answer = document.querySelector('input[name="resposta"]:checked'); //resposta escolhida
            var allAnswers = document.querySelectorAll('input[name="resposta"]'); //resposta escolhida
            var correctAnswer = document.querySelector('input[name="correct-answer"]').value; //resposta certa da pergunta

            allLabels = document.querySelectorAll('label'); //seleciona todos os labels

            //percorre todos os labels para remover cor de fundo de certo ou errado
            allLabels.forEach(label => {
                label.classList.remove('answer-correct') //remove fundo verde se tiver
                label.classList.remove('answer-no-correct') //remove fundo vermelho se tiver
            });

            allAnswers.forEach(answer =>{
                answer.disabled = true;
            })

            //caso o usuario tenha escolhido uma resposta
            if(answer){
                answer.disabled = false;
                answer.checked = true;

                var label = document.querySelector('label[for="' + answer.value + '"]'); //seleciona label da resposta escolhida

                // SE A RESPOSTA FOR CORRETA
                if(answer.value == correctAnswer){
                    label.classList.add("answer-correct") //classe de resposta correta

                // SE A RESPOSTA FOR ERRADA
                }else{
                    label.classList.add("answer-no-correct") //classe de resposta errada
                }
            }

             // Define qual btn foi usado (ultima pergunta ou proxima pergunta)
            var buttonClicked = document.getElementById('button-clicked');
            buttonClicked.value = event.target.value;

            // Espera um tempo para enviar o form
            setTimeout(function() {
                document.getElementById('form-quiz').submit(); //envia form
            }, 1000);
        }

        buttonNext = document.getElementById('btn-next'); //seleciona botão do formulario
        buttonSubmit = document.getElementById('btn-submit'); //seleciona botão do formulario


        if(buttonNext){
            buttonNext.addEventListener("click", verifyAnswer); //coloca onclick no button
        }else{
            buttonSubmit.addEventListener("click", verifyAnswer); //coloca onclick no button
        }
    </script>
    
    {{-- Footer --}}
    @include('layouts/footer')
</body>    
@endsection
    
        