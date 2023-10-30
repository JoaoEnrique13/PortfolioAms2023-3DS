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
@section('title', 'Science Ar - Meus Quizzes Respondidos')

@section('content')
<body>

    {{-- Menu --}}
    @include('layouts/menu')
    <main>
        <h3 class="tituloCentralizado">Resultado</h3>

        {{-- RESULTADO RUIM < DA METADA --}}
        @if (($total_questions / 2) >= $answers_correct_user)
            <section class="InformacoesResultado"> 
                <p class="paragrafoResultados">Que pena! Você acertou {{  $answers_correct_user  }} de {{$total_questions}} questões.</p>
                <p class="paragrafoResultados">Revise o conteúdo ou Tente Novamente.</p>
            </section>
    
            <section class="btnResultados">
                <a href="/quiz/{{$id_quiz}}" class="btn btnRegistrar">Tentar Novamente</a>
                <a href="/list-material" class="btnRegistrar btn">Revisar Material</a>
            </section>
    
            <section class="imgResultados">
                <img class="imgResultadosRuins" src="../img/astronautResults2.gif" alt="">
            </section>

        {{-- RESULTADO BOM > DA METADA --}}
        @else

            <section class="InformacoesResultado"> 
                <p class="paragrafoResultados">Parabéns! Você acertou {{  $answers_correct_user  }} de {{$total_questions}} questões.</p>
                <p class="paragrafoResultados">Você pode tentar novamente ou estudar outro tema.</p>
            </section>
    
            <section class="btnResultados">
                <a href="/quiz/{{$id_quiz}}" class="btn btnRegistrar">Tentar Novamente</a>
                <a href="{{route('quiz.progress')}}" class="btn btnRegistrar">Sair do Quiz</a>
            </section>
    
            <section class="imgResultados">
                <img class="imgResultadosBons" src="../img/astronautResults.gif" alt="">
            </section>
        @endif


    </main>
    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection    