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
@section('title', 'Science Ar - Página Não Encontrada')

{{-- Conteudo do site --}}
@section('content')
    
    <main class="main-404">
        <img class="img-moon" src="{{asset('img/moon.png')}}" alt="" srcset=""> {{-- IMAGEM DA LUA --}}
        <img class="img-earth" src="{{asset('img/earth.png')}}" alt="" srcset=""> {{-- IMAGEM DA TERRA --}}
        <div class="row">
            <div class="row">
                <h1 class="h1-404">419</h1>
            </div>
            <div class="row">
                <p class="text-404">Não foi possivel completar essa ação!</p>
            </div>
            <div class="row">
                <p style="color: #fff"> Tente novamente mais tarde</p>
                
                <p class="p-404">
                    <a class="link-404" href="/">
                        <img height="15px" src="{{asset('img/arrow-back.png')}}" alt="" srcset="">
                        Volte para home
                    </a>
                </p>
            </div>
        </div>
    </main>
    {{-- Footer --}}
    @include('layouts/footer')
@endsection