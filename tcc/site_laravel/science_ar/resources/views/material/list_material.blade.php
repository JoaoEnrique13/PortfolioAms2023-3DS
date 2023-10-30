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
@section('title', 'Science Ar - Materiais')

{{-- Conteudo do site --}}
@section('content')
<body>

    {{-- Menu --}}
    @include('layouts/menu')

    <section class="container-main ">
        <main class="main-quiz">
            <h3 class="titulo">Materiais</h3>
            <div class="row row-quiz">
                {{-- Percorre todos os quizzes --}}
                    <!-- TEMPERATURA -->
                    <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/temperatura">
                            <div class="card-image " style="background-image: url('../img/materiais_banner/58.png');">
                            </div>
                            <a class="link-card-quiz" href="/temperatura">
                                <div class="">
                                    <h2 class="title">Calor e Sensação Térmica</h2>
                                    <p>Aprenda mais sobre o calor.</p>
                                </div>
                            </a>
                        </a>
                    </div>

                    <!-- FENOMENOS -->
                    <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/tectonic_plates">
                            <div class="card-image " style="background-image: url('../img/materiais_banner/60.png');">
                            </div>
                            <a class="link-card-quiz" href="/tectonic_plates">
                                <div class="">
                                    <h2 class="title">Placas Tectônicas</h2>
                                    <p>Saiba mais sobre as placas tectônicas e suas derivas continentais</p>
                                </div>
                            </a>
                        </a>
                    </div>

                    <!-- PLACAS -->
                    <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/fenomenos">
                            <div class="card-image" style="background-image: url('../img/materiais_banner/56.png');">
                            </div>
                            <a class="link-card-quiz" href="/fenomenos">
                                <div class="">
                                    <h2 class="title">Fenômenos Naturais</h2>
                                    <p>Conheças os principais fenômenos da natureza</p>
                                </div>
                            </a>
                        </a>
                    </div>

                    <!-- COMBUSTÍVEIS E MÁQUINAS TÉRMICAS -->
                    <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/combustiveis_maquinas">
                            <div class="card-image" style="background-image: url('../img/materiais_banner/63.png');">
                            </div>
                            <a class="link-card-quiz" href="/combustiveis_maquinas">
                                <div class="">
                                    <h2 class="title">Combustíveis e Máquinas Térmicas</h2>
                                    <p>Conheças os principais...</p>
                                </div>
                            </a>
                        </a>
                    </div>

                    <!-- SISTEMA SOLAR  -->
                    <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/solar_system">
                            <div class="card-image " style="background-image: url('../img/materiais_banner/62.jpg');">
                            </div>
                            <a class="link-card-quiz" href="/solar_system">
                                <div class="">
                                    <h2 class="title">Sistema Solar</h2>
                                    <p>Aprenda mais sobre como funciona o sistema solar.</p>
                                </div>
                            </a>
                        </a>
                    </div>

                     <!-- PANTANAL -->
                     <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/pantanal">
                            <div class="card-image " style="background-image: url('../img/materiais_banner/35.png');">
                            </div>
                            <a class="link-card-quiz" href="/pantanal">
                                <div class="">
                                    <h2 class="title">Pantanal</h2>
                                    <p>Conheça mais sobre o Bioma Pantanal </p>
                                </div>
                            </a>
                        </a>
                    </div>

                    <!-- AMAZÔNIA -->
                    <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/amazonia">
                            <div class="card-image " style="background-image: url('../img/materiais_banner/31.png');">
                            </div>
                            <a class="link-card-quiz" href="/amazonia">
                                <div class="">
                                    <h2 class="title">Amazônia</h2>
                                    <p>Conheça mais sobre esse bioma. </p>
                                </div>
                            </a>
                        </a>
                    </div>

                    <!-- PAMPA -->
                    <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/pampa">
                            <div class="card-image " style="background-image: url('../img/materiais_banner/33.png');">
                            </div>
                            <a class="link-card-quiz" href="/pampa">
                                <div class="">
                                    <h2 class="title">Pampa</h2>
                                    <p>Conheça mais sobre esse bioma. </p>
                                </div>
                            </a>
                        </a>
                    </div>

                    <!-- CERRADO -->
                    <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/cerrado">
                            <div class="card-image " style="background-image: url('../img/materiais_banner/32.png');">
                            </div>
                            <a class="link-card-quiz" href="/cerrado">
                                <div class="">
                                    <h2 class="title">Cerrado</h2>
                                    <p>Conheça mais sobre esse bioma. </p>
                                </div>
                            </a>
                        </a>
                    </div>

                    <!-- CAATINGA -->
                    <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/caatinga">
                            <div class="card-image " style="background-image: url('../img/materiais_banner/34.png');">
                            </div>
                            <a class="link-card-quiz" href="/caatinga">
                                <div class="">
                                    <h2 class="title">Caatinga</h2>
                                    <p>Conheça mais sobre esse bioma. </p>
                                </div>
                            </a>
                        </a>
                    </div>

                    <!-- MATA ATLÂNTICA -->
                    <div class="col col-quiz card card-quiz">
                        <a class="link-card-quiz" href="/mata_atlantica">
                            <div class="card-image " style="background-image: url('../img/materiais_banner/59.png');">
                            </div>
                            <a class="link-card-quiz" href="/mata_atlantica">
                                <div class="">
                                    <h2 class="title">Mata Atlântica</h2>
                                    <p>Conheça mais sobre esse bioma. </p>
                                </div>
                            </a>
                        </a>
                    </div>
            </div>
        </main>
    </section>

    {{-- Footer --}}
    @include('layouts/footer')
</body>

@endsection