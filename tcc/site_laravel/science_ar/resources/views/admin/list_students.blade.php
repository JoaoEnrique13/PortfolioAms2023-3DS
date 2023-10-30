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
@section('title', 'Science Ar - Lista de Alunos')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <main>
        
        {{-- MENSAGEM DE CONTA APAGADA --}}
        @if(session()->has('account-delete-success'))
            <div class="alert alert-quizzes alert-success alert-dismissible alert-account-create fade show" role="alert">
                <strong>Conta Excluida!</strong> A conta do aluno foi apagada.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- MENSAGEM DE CONTA NÃO APAGADA --}}
        @if(session()->has('account-delete-danger'))
            <div class="alert alert-quizzes alert-danger alert-dismissible alert-account-create fade show" role="alert">
                <strong>Não foi possível excluir aluno!</strong> Tente novamente mais tarde.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h3 class="tituloCentralizado">Lista de Alunos</h3>

        {{-- TABELA DE LISTAGEM DE ALUNOS  --}}
         <section class="Table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Excluir</th>
                </tr>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <th scope="row">{{$student->id}}</th> {{-- ID ALUNO --}}

                            {{--  Veririca se tem imagem --}}
                            @php 
                                $path = str_replace('../', "", $student->img);
    
                                if (file_exists($path)) {
                                    $img_account = asset($student->img);
                                } else {
                                    $img_account = asset('img/img_account/img_account.png');
                                }
                            @endphp

                            <td><img class="img-list" src="{{asset($student->img)}}"></td> {{-- IMAGEM CONTA --}}
                            <td>{{$student->name}}</td> {{-- NOME  --}}
                            <td>{{$student->email}}</td> {{-- EMAIL --}}

                            {{-- BOTÃO EXCLUIR --}}
                            <td>
                                <!-- Botão para abrir o modal -->
                                <button type="button" class="btn btn-delete btnApagar" data-bs-toggle="modal" data-bs-target="#confirm-delete-student-{{$student->id}}">
                                    Excluir
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>


    @foreach ($students as $student)
        <!-- Modal de Confirmação de Exclusão -->
        <div class="modal fade" id="confirm-delete-student-{{$student->id}}" tabindex="-1" aria-labelledby="confirm-delete-student-{{$student->id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirm-delete-student-{{$student->id}}">Confirmar Exclusão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza de que deseja excluir este aluno(a)? Não é possível recuperar os dados.
                    </div>
                    <div class="modal-footer" style="flex-wrap: nowrap">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="width: 100%">
                            Cancelar
                        </button>
                        <!-- Adicione aqui o código para excluir o item -->
                        <a href="{{ route('user.delete', ['id' => $student->id]) }}" type="button" class="btn btn-danger btnApagar" style="width: 100%">
                            Excluir
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection