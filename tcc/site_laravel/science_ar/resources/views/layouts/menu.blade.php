<header>
    <nav class="navbar navbar-expand-xl navbar-dark" style="width: 100%;">
        <div class="container-fluid">
        <a class="navbar-brand logo" href="{{route('index')}}">Science AR</a>

        @if(auth()->user())
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                {{-- Verifica se tem imagem --}}
                @php 
                $path = str_replace('../', "", auth()->user()->img);

                if (file_exists($path)) {
                    $img_account = asset(auth()->user()->img);
                } else {
                    $img_account = asset('img/img_account/img_account.png');
                }
            @endphp
            <img src="{{$img_account}}" alt="" class="img-account-menu">
            </button>
        @else
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        @endif

        <div class="offcanvas text-bg-dark offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background: #542066!important; max-width: 80% !important;">
            <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Science AR</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="nav-bar offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('augmented_reality')}}">RA</a>
                    </li>

                    {{-- Caso esteja logado, verifica se é admin --}}
                    @if(auth()->check())
                        {{-- veririca se é admin --}}
                        @php
                            $admin_controller = app(App\Http\Controllers\AdminController::class);
                            $isAdmin = $admin_controller->isAdmin(auth()->user()->id);
                        @endphp
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('list_material')}}">Material</a>
                    </li>

                    {{-- Se for admin,  mostra criar quiz e tabelas de listagem--}}
                    @if(auth()->check() && $isAdmin)
                        @if ($isAdmin)
                            <li class="nav-item dropdown" style="flex-wrap: wrap;">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Quiz
                                </a>
                                <ul class="dropdown-menu dropdown-100">
                                    <li><a class="dropdown-item" href="{{route('quiz.create')}}">Criar Quiz</a></li>
                                    <li><a class="dropdown-item" href="{{route('quiz.list')}}">Responder Quiz</a></li>
                                </ul>
                            </li>
                            
                            <li class="nav-item dropdown" style="flex-wrap: wrap;">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%">
                                    Administrar
                                </a>
                                <ul class="dropdown-menu dropdown-100">
                                    <li><a class="dropdown-item" href="{{route('list_students')}}">Listar Alunos</a></li>
                                    <li><a class="dropdown-item" href="{{route('list_admins')}}">Listar Administradores</a></li>
                                    <li><a class="dropdown-item" href="{{route('admin.create')}}">Criar Administrador</a></li>
                                </ul>
                            </li>
                        @endif

                    {{-- Caso seja aluno ou não esteja logado ele mostra o quiz --}}
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/quiz">Quiz</a>
                        </li>
                    @endif
                     
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Sobre nós</a>
                    </li>

                      {{-- Se o usuário não for logado --}}
                    @if(!auth()->check())
                        {{-- Entrar --}}
                        <li class="nav-item">
                            <a href="/login" style="width: 100%; text-align: center;" class="button">Entrar</a>
                        </li>

                    {{-- Se o usuário for logado --}}
                    @else
                        {{-- Progresso --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/quiz/progress">Meu Progresso</a>
                        </li>

                        
                        <hr>
                        
                        <li class="nav-item dropdown" style="flex-wrap: wrap;">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%">
                                {{-- Verifica se tem imagem --}}
                                @php 
                                    $path = str_replace('../', "", auth()->user()->img);

                                    if (file_exists($path)) {
                                        $img_account = asset(auth()->user()->img);
                                    } else {
                                        $img_account = asset('img/img_account/img_account.png');
                                    }
                                @endphp
                                <img src="{{$img_account}}" alt="" class="img-account-menu">
                            </a>
                            
                            <ul class="dropdown-menu dropdown-100">
                                <li><a class="dropdown-item" href="/account">Conta</a></li>
                                <li><hr class="dropdown-divider"></li>
                                {{-- Sai da conta --}}
                                <li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    
                </ul>
            </div>
        </div>
        </div>
    </nav>
</header>