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
@section('title', 'Science Ar - Placas Tectônicas')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
<main class="main-material">    

<p class="tituloCentralizado title-material">Placas Tectônicas</p>
<div class="row row-nav-material">
    <div class="col-2 col-nav-material">
        <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
            <nav class="nav nav-pills flex-column" style="position: sticky!important; top: 20px">
                <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="9" id="9"  href="#carouselExample" style= "order: 9!important">Placa Tectônica</a>
                <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="8" id="8"  href="#carouselExample" style= "order: 8!important">QR Code</a>
                <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="7" id="7"  href="#carouselExample" style= "order: 7!important">Por que as placas tectônicas se movimentam?</a>
                <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="6" id="6"  href="#carouselExample" style= "order: 6!important">Tipos de Placas</a>
                <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="5" id="5"  href="#carouselExample" style= "order: 5!important">Placa Euro-Asiática</a>
                <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="4" id="4"  href="#carouselExample" style= "order: 4!important">Placa do Pacífico</a>
                <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="3" id="3"  href="#carouselExample" style= "order: 3!important">Placa Sul-Americana e Placa de Nazca</a>
                <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="2" id="2"  href="#carouselExample" style= "order: 2!important">Principais Placas Tectônicas</a>
                <a class="nav-link link-material ms-3 my-1" id="1"  data-bs-target="#carouselExample" data-bs-slide-to="1" href="#carouselExample" style= "order: 1!important">Pangeia</a>
                <a class="nav-link link-material" data-bs-slide-to="0" id="0" data-bs-target="#carouselExample" href="#carouselExample" style= "order: 0!important">Placa Tectônica</a>
            </nav>
        </nav>
    </div>

    <div class="col conteudo-material">
        <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" tabindex="0">
            <div id="carouselExample" class="carousel carousel-dark slide">
                <div class="carousel-inner">

                    <!-- CARROUSEL 1 -->
                    <div class="carousel-item active" style="height: 70vh;">
                        <p> 
                            Placas tectônicas ou tectónicas, são blocos rochosos semirrígidos que formam a crosta terrestre. O movimento dessa placa é constante, dessa forma, elas se afastam e aproximam uma das outras.
                        </p>
                        <div class="img-center">
                            <img src="{{asset('img/img_materiais/placas_tectonicas/placas_tectonicas.jpg')}}" class="img-temp-material" srcset=""> 
                        </div>
                    </div>

                    <!-- CARROUSEL 2 -->
                    <div class="carousel-item" style="height: 70vh;">
                        <h5>Pangeia - Teoria das Placas Tectônicas</h5>
                        <p>
                            Em 1913, Alfred Wegener apresentou a Teoria da Deriva Continental, que afirma que, há milhões de anos, as massas de Terra formavam um único supercontinente, chamado Pangeia. Essa teoria foi confirmada por sua sucessora, a chamada Teoria das Placas Tectônicas.
                        </p>
                        <div class="img-center">
                            <img src="{{asset('img/img_materiais/placas_tectonicas/pangeia.jpg')}}" class="img-temp-material" srcset="">
                        </div>
                    </div>

                    <!-- CARROUSEL 3 -->
                    <div class="carousel-item" style="height: 70vh;">
                        <h5>Principais Placas Tectônicas</h5>
                        <p>
                            O planeta Terra está dividido em 52 placas tectônicas, sendo 14 principais e 38 menores. Como exemplos de placas principais, podemos citar a Placa Sul-Americana, a Placa do Pacífico e a Placa Australiana. As menores podem ser exemplificadas pela Placa do Ande do Norte, Placa da Carolina e Placa das Marianas.
                        </p>
                        <p>
                            Falaremos a seguir sobre algumas placas tectônicas!
                        </p>
                        <div class="img-center">
                            <img src="{{asset('img/img_materiais/placas_tectonicas/placas_principais.jpg')}}" class="w-50" srcset="">
                        </div>
                    </div>

                    <!-- CARROUSEL 4 -->
                    <div class="carousel-item" style="height: 70vh;">
                        <h5>Placa Sul-Americana e Placa de Nazca</h5>
                        <p>
                            <strong>Placa Sul-Americana: </strong>Abrange a América do Sul e estende-se até a Dorsal Mesoatlântica.
                            Sua fronteira leste faz limite divergente com a Placa Africana; ao sul, faz limite com a Placa Antártica e com a Placa Scotia; a oeste, faz limite convergente com a Placa de Nazca; e ao norte, limita-se com a Placa Caribenha.
                        </p>
                        <p>
                            <strong>Placa de Nazca: </strong>Localiza-se à esquerda da Placa Sul-Americana. O choque entre essas duas placas formou a Cordilheira dos Andes.
                        </p>
                        <div class="img-center">
                            <img src="{{asset('img/img_materiais/placas_tectonicas/placa_sul_nazca.jpg')}}" alt="" style="width: 30%">
                        </div>
                    </div>

                    <!-- CARROUSEL 5 -->
                    <div class="carousel-item" style="height: 70vh;">
                        <h5>Placa do Pacífico</h5>
                        <p>
                            Abrange boa parte do Oceano Pacífico.
                        </p>
                        <p>
                            Limita-se ao norte com a Placa do Explorador, com a Placa Juan de Fuca e com a Placa de Gorda.
                        </p>
                        <p>
                            Seu limite com a Placa Norte-Americana resultou na falha de San Andres.
                        </p>
                        <div class="img-center">
                            <img src="{{asset('img/img_materiais/placas_tectonicas/placa_pacifico.jpg')}}" alt="" style="width: 30%">
                        </div>
                    </div>

                    <!-- CARROUSEL 6 -->
                    <div class="carousel-item" style="height: 70vh;">
                        <h5>Placa Euro-Asiática</h5>
                        <p>
                            Abrange parte da Eurásia e limita-se com a Placa Africana e a Placa de Índia.
                        </p>        
                        <p>
                            Separa-se da Placa Norte-Americana pela Dorsal Mesoatlântica.
                        </p>                
                        <div class="img-center">
                            <img src="{{asset('img/img_materiais/placas_tectonicas/placa_euro.jpg')}}" alt="" style="width: 50%">
                        </div>
                    </div>

                    <!-- CARROUSEL 7 -->
                    <div class="carousel-item" style="height: 70vh;">
                        <h5>Tipos de Placas</h5>
                        <p>
                            <ul>
                                <li><strong>Oceânicas: </strong>encontram-se no assoalho oceânico.</li>
                                <li><strong>Continentais: </strong>situam-se sob os continentes.</li>
                                <li><strong>Oceânicas e Continentais: </strong>situam-se sob o continente e no assoalho oceânico.</li>
                            </ul>
                        </p>
                        <div class="img-center">
                            <img src="{{asset('')}}" alt="">
                        </div>
                    </div>

                    <!-- CARROUSEL 8 -->
                    <div class="carousel-item" style="height: 70vh;">
                        <h5>Por que as placas tectônicas se movimentam?</h5>
                        <p>
                            Os movimentos realizados pelas placas tectônicas ocorrem em virtude das altas temperaturas existentes no interior da Terra.
                        </p>
                        <p>
                            A crosta terrestre encontra-se sobre o manto, camada da Terra composta por magma. O intenso calor provoca a movimentação circular do manto em correntes de convecção. Esse movimento convectivo transfere calor do núcleo (camada mais interna da Terra) para as camadas mais externas, provocando a movimentação das placas, levando à junção ou à separação dos continentes.
                        </p>
                        <div class="img-center">
                            <img src="{{asset('')}}" alt="" >
                        </div>
                    </div>

                    <!-- CARROUSEL 9 -->
                    <div class="carousel-item">
                        <h5>QR Code</h5>
                        <p>
                            Após concluir a revisão do material, você está pronto para acessar uma experiência enriquecedora. Abra o aplicativo de realidade aumentada Science AR e faça a varredura do QR Code abaixo. Isso proporcionará acesso a um empolgante modelo tridimensional.
                        </p>
                        <p><strong>Baixe o App:</strong></p>
                        <p style="display: flex">
                            {{-- <a href="" style="display: flex; flex-direction: column; align-items: center;">
                                <img src="{{asset('img/ios.png')}}" height="80px" width="80px">
                                iOS
                            </a> --}}

                            <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing" style="display: flex; flex-direction: column; align-items: center;">
                                <img src="{{asset('img/android.png')}}" height="80px" width="80px">
                                Android
                            </a>
                        </p>
                    </div>

                    
                    <!-- CARROUSEL 9 -->
                    <div class="carousel-item">
                        <h5>Placa Tectônica</h5>
                        <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de uma Placa Tectônica.</a></p>
                        <div class="img-center">
                            <figure>
                                <img src="{{asset('img/qr_code/placas_tectonicas.jpg')}}" class="img-qrcode">
                                <figcaption style="margin-top: -30px">
                                    Placa Tectônica
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
</main>

<script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection
