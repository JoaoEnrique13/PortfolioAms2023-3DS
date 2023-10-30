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
@section('title', 'Science Ar - Redefinir Senha')

{{-- Conteudo do site --}}
@section('content')

    {{-- Menu --}}
    <div class="menu-login">
        @include('layouts/menu')
    </div>
  
    <body class="body-account">
        <!-- Background image -->
        <div class="bg-image d-flex" style="justify-content: center; flex-wrap: wrap; align-items: center;">
        <!-- Background image -->

        <div class="container container-login">
            <div class="cardLogin">
                <div class="card-body py-5">
                    <div class="row d-flex justify-content-center w-100" style="margin: 0;">
                        <div class="col-lg-8 col-lg-login">
                
                            {{-- MENSAGEM DE CONTA NÃO CRIADA --}}
                            @if(session()->has('status'))
                                <div class="alert alert-login alert-success alert-dismissible fade show" role="alert">
                                    {{session('status')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <h2 class="fw-bold mb-5 text-center">Redefinir Senha</h2>
                            <form method="POST" action="{{ route('user.reset_password') }}">
                                @csrf

                                <p style="text-align: left!important">Informe seu email para enviar um link de redefinição de senha</p>

                                <!-- EMAIL -->
                                <div class="form-outline mb-4" style="margin-bottom: 35px!important">
                                    <input id="email" type="email" class="form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="E-mail" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert" style="text-align: left">
                                                {{$message}}
                                        </span>
                                    @enderror
                                </div>

                                <!-- Submit button -->
                                <section class="text-center">
                                    <button type="submit" class="btn btnLogin btnSobreNos mt-4">
                                        Enviar Email
                                    </button><br><br> 
                                    <a class="link-register" href="/register">Não tem conta? Cadastre-se</a>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- JQUREY E JS --}}
        <script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    
        {{-- Footer --}}
        @include('layouts/footer')
    </body>
@endsection
