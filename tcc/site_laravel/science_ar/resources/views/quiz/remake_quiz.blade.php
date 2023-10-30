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
@section('title', 'Science Ar - Quiz' . $quiz->title)

@section('content')
<body>

    {{-- Menu --}}
    @include('layouts/menu')
    {{-- Contagem das perguntas --}}
    @php 
        if(isset($_GET['page']) && $_GET['page'] != ""){ //caso tenha o get "page" a pergunta vai receber esse valor
            $pergunta = $_GET['page'];
        }else{//caso não tenha o get "page" a pergunta vai receber 1
            $pergunta =1;
        }
          
        $next = $pergunta +1;
        $prev = $pergunta -1;
    @endphp
        
    <!-- Titulo do Quiz -->
    <h1>{{ $quiz->title }}</h1>
    <form action="/remake-quiz" method="POST">
        @csrf

        <input type="text" name="id_quiz" value="{{$quiz->idQuiz}}" style="display: none">{{-- ID do quiz --}}
        <input type="text" name="id_quiz_answered" value="{{$quiz_answered->idQuizAnswered}}" style="display: none">{{-- ID do quiz Respondido --}}
        <input type="hidden" name="page" id="page" value="{{ $pergunta }}">{{-- número da pagina/pergunta --}}

        {{-- Perguntas e respostas --}}
        @foreach ($questions as $question)
           <div class="question-quiz">
             {{-- Pergunta do quiz --}}
             <h2>{{ $pergunta }}. {{ $question->questionText }}</h2>

             {{-- Respostas --}}
             @foreach ($answers as $answer)
                 {{-- Caso a resposta seja da pergunta --}}
                 @if ($answer->idQuestion == $question->idQuestion)
                 <input type="radio" name="resposta" value="{{$answer->idAnswer}}" id="{{$answer->idAnswer}}"  {{ old('resposta') == $answer->idAnswer ? 'checked' : '' }}> <label for="{{$answer->idAnswer}}">{{$answer->answerText}}</label> <br>
                 @endif
             @endforeach

           </div>
        @endforeach

        {{-- Botões para enviar, voltar e avançar --}}
        @if ($pergunta >= 2)
            {{-- <button name="action" type="submit" value="prev">Anterior</button> --}}
        @endif
        {{-- Caso esteja na ultima pergunta --}}
        @if ($total_questions == $pergunta)
            <button name="action" type="submit" value="submit">Enviar resposta</button>
        @else
            {{-- Botão para ir para a próxima --}}
            <button name="action" type="submit" value="next">Próximo</button>
        @endif
@endsection


    {{-- Footer --}}
    @include('layouts/footer')
</body>@endsection
        
        