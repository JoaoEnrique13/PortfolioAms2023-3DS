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
@section('title', 'Science Ar')

{{-- Conteudo do site --}}
@section('content')
<body class="body-main background-image-home">
    <div class="fundo-home">

        {{-- VIDE DE FUNDO --}}
        <video autoplay loop muted id="video-fundo-home" style="z-index: 0!important">
            <source src="../img/background.mp4" type="video/mp4">
        </video>

        {{-- VIDE DE FUNDO --}}
        <video autoplay loop muted id="video-fundo-home-dois" style="z-index: -1!important; bottom:0">
            <source src="../img/background.mp4" type="video/mp4">
        </video>

        {{-- Menu --}}
        @include('layouts/menu')

        <div class="cont-home row">
            <div class="titulo-home col">
                <p>Explore a magia da ciência por meio da realidade aumentada</p>
    
                <p class="subtitulo-home">
                    A melhor maneira de aprender e se divertir!
                </p>   
    
                <a class="btnSobreNos" href="/about" style="color: #f6f6f6;">Sobre Nós</a>
            </div>
    
    
            <div class="img-astronaut col">
            </div>
    
        </div>
        </div>

        {{-- JQUERY --}}
        <script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection

