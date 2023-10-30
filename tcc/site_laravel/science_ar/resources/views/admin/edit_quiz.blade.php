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
@section('title', 'Science Ar - Editar Quiz')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <div class="container-main">
        {{-- o  enctype="multipart/form-data" serve para salvar arquivos --}}
        <form action="{{ route('quiz.edit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <main>
                <h3 class="tituloCentralizado">Editar Quiz</h3>
                <section class="text-center2">
                    <div class="cardLogin2 mx-md-5 shadow-5-strong">
                        <div class="card-body py-5">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10">
                                        <div class="form-outline mb-4 div-create-quiz">
                                            <input type="hidden" name="id_quiz" id="id_quiz" value="{{$quiz->id_quiz}}">{{-- ID QUIZ --}}
                                            
                                            {{-- TITULO --}}
                                            <input type="text" id="title" name="title" class="form-control formCriarQuiz @error('title') is-invalid @enderror" placeholder="Título" value="{{ $quiz->title }}"/>
                                            @error('title')
                                                <span class="invalid-feedback" role="alert" style="text-align: left">
                                                        {{$message}}
                                                </span>
                                            @enderror
                                        </div>
                            
                                        {{-- DESCRICAO --}}
                                        <div class="form-outline mb-4">
                                            <input type="text" id="description" name="description" class="form-control formCriarQuiz @error('description') is-invalid @enderror" placeholder="Descrição" value="{{ $quiz->description }}"/>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert" style="text-align: left">
                                                        {{$message}}
                                                </span>
                                            @enderror
                                        </div>

                                        {{-- IMAGEM DO QUIZ --}}
                                        <div class="form-outline mb-4">
                                            <input type="file" id="img" name="img" class="img-quiz-preview d-none" value="{{ $quiz->img_quiz }}" accept="image/*"/>
                                            <label class="form-control formCriarQuizImg" for="img" style="background-image: url('{{ asset($quiz->img_quiz) }}')"></label>
                                            
                                            {{-- ERRO --}}
                                            <span class="invalid-feedback erro-img-quiz" role="alert" style="text-align: left" >
                                                Escolha um arquivo com formato válido: .jpg | .jpeg | .png | .gif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-criar-question">Atualizar</div>
                    </div>
                </section>
            </main>
        </div>
    </form>
    
    {{-- JQUERY --}}
    <script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection
