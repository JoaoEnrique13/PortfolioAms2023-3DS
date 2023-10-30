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
@section('title', 'Science Ar - Minha Conta')

{{-- Conteudo do site --}}
@section('content')

  <div class="menu-login">
    {{-- Menu --}}
    @include('layouts/menu')
  </div>

<body class="body-account">
    <!-- Section: Design Block -->
    <section class="text-center section-login">
        <!-- Background image -->
        <div class="bg-image bg-image-accoubt">
          <div class="container">
            <!-- CARD DE CONTA -->
            <div class="cardPerfil shadow-5-strong">
              <div class="card-body py-5">
                <div class="row d-flex justify-content-center">
                  <div class="col-lg-8 col-lg-login">
                    {{-- MENSAGEM DE IMAGEM EDITADA --}}
                    @if(session()->has('img-edit-success'))
                      <div class="alert alert-account alert-success alert-dismissible alert-account-create fade show" role="alert" style="margin-top: -30px; text-align: left; width: 100%">
                        <strong>Imagem atualizada!</strong> {{session('img-edit-danger')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif

                    {{-- MENSAGEM DE IMAGEM NÃO EDITADA --}}
                    @if(session()->has('img-edit-danger'))
                      <div class="alert alert-account alert-danger alert-dismissible alert-account-create fade show" role="alert" style="margin-top: -30px; text-align: left; width: 100%">
                        <strong></strong> {{session('img-edit-danger')}}.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif

                    {{-- MENSAGEM DE CONTA NÃO EDITADA --}}
                    @if(session()->has('account-edit-danger'))
                          <div class="alert alert-account alert-danger alert-dismissible alert-account-create fade show" role="alert" style="margin-top: -30px; text-align: left; width: 100%">
                            <strong>Não foi possível editar conta!</strong> Contate o administrador.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                  @endif
                  
                    {{-- MENSAGEM DE CONTA EDITADA --}}
                    @if(session()->has('account-edit-success'))
                          <div class="alert alert-account alert-success alert-dismissible alert-account-create fade show" role="alert" style="margin-top: -30px; text-align: left; width: 100%">
                            <strong>Conta editada com sucesso!</strong> Verifique suas informações abaixo.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                  @endif

                  {{-- MENSAGEM DE CONTA NÃO EXCLUIDA --}}
                  @if(session()->has('account-delete-danger'))
                    <div class="alert alert-danger alert-dismissible alert-account-create fade show" role="alert" style="margin-top: -30px">
                      <strong>Não foi possível excluir conta!</strong> Contate o administrador.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif


                  <h2 class="fw-bold mb-5">Meu Perfil</h2>

                  <!-- IMAGEM DA CONTA -->
                  <div class="profile">
                    {{-- o  enctype="multipart/form-data" serve para salvar arquivos --}}
                    <form action="{{route('account.update_img')}}" method="post" enctype="multipart/form-data" class="w-100">
                      @csrf
                      {{-- Campo de imagem --}}
                      <input type="file" class="img-account-preview d-none @error('img') is-invalid @enderror" name="img" id="img" accept="image/*">

                      {{-- PREVIEW DA IMAGEM --}}
                      <div class="row">
                        <div class="col">
                          <label for="img" class="label-choose-img" style="position: relative!important;">
                            {{-- Verifica se tem imagem --}}
                            @php 
                              $path = str_replace('../', "", auth()->user()->img);

                              if (file_exists($path)) {
                                  $img_account = asset(auth()->user()->img);
                              } else {
                                $img_account = asset('img/img_account/img_account.png');
                              }
                            @endphp
                            
                            <img src="{{asset('img/photo.png')}}" class="img-choose-img" srcset="">
                            <img src="{{$img_account}}" class="imgProfile" id="img-profile">
                            <div class="filtro-img"></div>
                          </label>
                                            
                          {{-- ERRO --}}
                          <span class="invalid-feedback erro-img-quiz" role="alert" style="text-align: left" >
                              Escolha um arquivo com formato válido: .jpg | .jpeg | .png | .gif
                          </span>
                        </div>
                      </div>
                      
                      {{-- BTN ALTERAR IMAGEM --}}
                      <div class="row row-btn-image-account" style="margin-top: 20px; margin-bottom: 80px">
                        <div class="col">
                          <button type="submit" class="btn btnAccount btnRegistrar">
                            Alterar Imagem
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <form method="POST" action="{{route('account.update')}}">
                    @csrf

                    {{-- NOME --}}
                    <div class="row mb-4">
                        <div class="form-outline">
                          <input type="text" id="name" name="name" class="form form-control @error('name') is-invalid @enderror" placeholder="Nome" value="{{auth()->user()->name}}" autocomplete="name" />
                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  {{ $message }}
                              </span>
                          @enderror
                      </div>
                    </div>

                    {{-- EMAIL --}}
                    <div class="row mb-4">
                        <div class="form-outline">
                          <input type="email" id="email" name="email" class="form form-control @error('email') is-invalid @enderror" placeholder="E-mail" value="{{auth()->user()->email}}" autocomplete="email"/>
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  {{ $message }}
                              </span>
                          @enderror
                      </div>
                    </div>

                    {{-- SENHA --}}
                    <div class="row mb-4">
                        <div class="form-outline">
                          {{-- <input type="password" id="password" name="password" class="form @error('password') is-invalid @enderror" placeholder="Senha" autocomplete="new-password"/> --}}
                          <div class="col" style="position: relative">
                            <input id="password" type="password" class="form form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" value="{{ old('password') }}" placeholder="Senha">
                            <img class="view-password" id="view-password" src="{{asset('img/eye.svg')}}" onclick="showPassword()" srcset="">
                          </div>
                          @error('password')
                              <span class="invalid-feedback" role="alert" style="display: block">
                                  {{ $message }}
                              </span>
                          @enderror
                      </div>
                    </div>

                    <div class="group-btn" style="width: 100%; display: flex; flex-wrap: nowrap; justify-content: space-between;">
                      <!--ATUALIZAR-->
                      <button type="submit" class="btn btnRegistrar" style="width: 49%">
                        Atualizar
                      </button>
                      <!-- Botão para abrir o modal -->
                      <button type="button" class="btn btnApagar" data-bs-toggle="modal" data-bs-target="#confirm-delete-user" style="width: 49%">
                          Excluir
                      </button>
                    </div>
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

  <!-- Modal de Confirmação de Exclusão -->
  <div class="modal fade" id="confirm-delete-user" tabindex="-1" aria-labelledby="confirm-delete-user" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="confirm-delete-user">Confirmar Exclusão</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  Tem certeza de que deseja excluir sua conta? Não é possível recuperar os dados.
              </div>
              <div class="modal-footer" style="flex-wrap: nowrap">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="width: 100%">
                      Cancelar
                  </button>
                  <!-- Adicione aqui o código para excluir o item -->
                  <a href="{{ route('user.delete', ['id' => auth()->user()->id]) }}" type="button" class="btn btn-danger btnApagar" style="width: 100%">
                      Excluir
                  </a>
              </div>
          </div>
      </div>
  </div>
    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection
