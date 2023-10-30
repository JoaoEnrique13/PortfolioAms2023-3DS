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
@section('title', 'Science Ar - Meu progresso')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <div class="container-main">
        <main>
            <p class="tituloCentralizado">Meu Progresso</p>
                
            {{-- Caso ele não tenha respondido nenhum quiz --}}
            @if ($quizzes == '[]')
                <div class="alert alert-warning alert-dismissible alert-account-create fade show" role="alert" style="min-height: 60px; width: 100%">
                    <strong>Você ainda não realizou um quiz!</strong> Responda um <a href="{{route('quiz.list')}}">quiz</a> para ver seu progresso aqui.
                </div>
            {{-- Caso ele já tenha respondido nenhum quiz --}}
            @else
                <div class="row row-progress">
                    <div class="col-8 col-progress-quiz">
                        {{-- Todos os quizzes --}}
                        @foreach ($quizzes as $quiz)
                            <div class="card-progress">
                                <div class="col-3">
                                    {{--  Verifica se quiz tem imagem --}}
                                    @php 
                                        $path = str_replace('../', "", $quiz->img_quiz);

                                        if (file_exists($path)) {
                                            $img_quiz = asset($quiz->img_quiz);
                                        } else {
                                            $img_quiz = asset('img/img_quiz/img_quiz.png');
                                        }
                                    @endphp
                                    <img src="{{asset($img_quiz)}}" alt="">
                                </div>
                                <div class="col">
                                    <h2>{{$quiz->title}} - {{$quiz->total_acertos}} acertos de {{$quiz->total_questions}}</h2>
                                    <p>Quiz concluído com sucesso!</p>
                                    <a class="btn btn-pourple btn-sm" href="/quiz/{{$quiz->id_quiz}}">Realizar quiz novamente</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col col-quiz-info">
                        <div class="card-lado">
                            @php
                                // TOTAL DE ACERTOS
                                $quiz_acertos = 0;
                                $quiz_erro = 0;
                            
                                foreach ($quizzes as $quiz){
                                    if($quiz->total_acertos >= ($quiz->total_questions/2)){
                                        $quiz_acertos +=1;
                                    }else{
                                        $quiz_erro +=1;
                                    }
                                }
                            @endphp

                            <h5>Resultado</h5>
                            <p>Total de questionários respondidos: {{count($quizzes)}}</p>
                            <p>Total de acertos: {{$quiz_acertos}}</p>
                            <p>Total de erros: {{$quiz_erro}}</p>
                            <a href="/quiz" class="btnSobreNos">Realizar outro quiz</a>
                        </div>
                    </div>
                </div>
            @endif
        </main>
    </div>
    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection
