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
@section('title', 'Science Ar - Criar Conta')

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
                @if(session()->has('conta-create-danger'))
                  <div class="alert alert-login alert-danger alert-dismissible fade show" role="alert">
                    <strong>Não foi possivel criar conta!</strong> Tente novamente mais tarde.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                {{-- MENSAGEM DE CONTA APAGADA --}}
                @if(session()->has('account-delete-success'))
                    <div class="alert alert-login alert-success alert-dismissible fade show" role="alert">
                        <strong>Conta Excluida!</strong> Sua conta foi apagada.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- MENSAGEM DE CONTA NÃO APAGADA --}}
                @if(session()->has('account-delete-danger'))
                    <div class="alert alert-login alert-danger alert-dismissible fade show" role="alert">
                        <strong>Não foi possível excluir conta!</strong> Tente novamente mais tarde.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                  
                  <h2 class="fw-bold mb-5 text-center">Criar Conta</h2>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    {{-- NOME --}}
                    <div class="form-outline mb-4" style="margin-bottom: 35px!important">
                        <input type="text" id="name" name="name" class="form form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nome" autocomplete="name"/>
                        @error('name')
                          <span class="invalid-feedback" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                    </div>
            
                    {{-- EMAIL --}}
                    <div class="form-outline mb-4" style="margin-bottom: 35px!important">
                      <input type="email" id="email" name="email" class="form form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-mail" autocomplete="email"/>
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                      @enderror
                    </div>
                        
                    {{-- SENHA --}}
                    <div class="form-outline mb-4" style="margin-bottom: 35px!important">
                      <div class="col" style="position: relative">
                        <input id="password" type="password" class="form form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" value="{{ old('password') }}" placeholder="Senha">
                        <img class="view-password" id="view-password" src="{{asset('img/eye.svg')}}" srcset="">
                      </div>

                      @error('password')
                          <span class="invalid-feedback" role="alert" style="text-align: left; display: block!important">
                              {{ $message }}
                          </span>
                      @enderror
                    </div>
            
                    <!-- Submit button -->
                    <section class="text-center">
                      <button type="submit" class="btn btnLogin btnSobreNos mt-4">
                          Criar Conta
                      </button><br><br> 
                      <a href="/login">Já tem conta? Faça login</a>
                    </section>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- JQUERY --}}
    <script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    
    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection
