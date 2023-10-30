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
@section('title', 'Science Ar - Fenômenos da Natureza')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <main class="main-material">    

        <p class="tituloCentralizado title-material">Fenômenos da Natureza</p>
        <div class="row row-nav-material">
            <div class="col-2 col-nav-material">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column" style="position: sticky!important; top: 20px">
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="8" id="8"  href="#carouselExample" style= "order: 8!important">Vulcão</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="7" id="7"  href="#carouselExample" style= "order: 7!important">QR Code</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="6" id="6"  href="#carouselExample" style= "order: 6!important">Tornados</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="5" id="5"  href="#carouselExample" style= "order: 5!important">Furacões, Tufões e Ciclones</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="4" id="4"  href="#carouselExample" style= "order: 4!important">Avalanche</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="3" id="3"  href="#carouselExample" style= "order: 3!important">Terremoto</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="2" id="2"  href="#carouselExample" style= "order: 2!important">Tsunami</a>
                        <a class="nav-link link-material ms-3 my-1" id="1"  data-bs-target="#carouselExample" data-bs-slide-to="1" href="#carouselExample" style= "order: 1!important">Vulcão</a>
                        <a class="nav-link link-material" data-bs-slide-to="0" id="0" data-bs-target="#carouselExample" href="#carouselExample" style= "order: 0!important">Fenômenos da Natureza</a>
                    </nav>
                </nav>
            </div>

            <div class="col conteudo-material">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" tabindex="0">
                    <div id="carouselExample" class="carousel carousel-dark slide">
                        <div class="carousel-inner">

                            <!-- CARROUSEL 1 -->
                            <div class="carousel-item active">
                                <h4>Fenômenos da Natureza</h4>
                                <p> Um fenômeno da natureza é um acontecimento natural, ou seja, que não teve intervenção humana, senso causada pela própria natureza. Elas podem ser causadas por diversas questões e os principais fenômenos da natureza são: vulcões, tsunami, terremotos, avalanches, furacões e tornados. </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/phenomena_of_nature/vulcao.png')}}" class="img-temp-material" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 2 -->
                            <div class="carousel-item">
                                <h5>Vulcão</h5>
                                <p>
                                    Consistem em estruturas geológicas por onde substâncias que estão no interior da terra podem ser expelidas através de uma abertura. A atividade vulcânica rompe o bloqueio das rochas mais frágeis no interior da terra e com isso, expele cinzas, gases e magma. 
                                    Um vulcão que se encontra em erupção, é considerado um dos fenômenos naturais mais incríveis e fascinantes. Porém, também pode ser muito assustador. 
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('../img/img_materiais/phenomena_of_nature/vulcao.jpg')}}" class="img-temp-material" srcset="" style="width: 50%">
                                </div>
                            </div>

                            <!-- CARROUSEL 3 -->
                            <div class="carousel-item">
                                <h5>Tsunami</h5>
                                <p>
                                Para que aconteça um tsunami, deve ocorrer uma movimentação das águas dos mares. Isso pode ter origem em terremotos, erupções vulcânicas, ou outros fenômenos naturais. Dessa maneira, é formada uma onda capaz de se movimentar por milhares de quilômetros.
                                Ao chegar na costa, ela pode se transformar de poucos metros para ondas gigantes, podendo superar 30 metros de altura.

                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/phenomena_of_nature/tsunami.jpg')}}" class="img-temp-material" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 4 -->
                            <div class="carousel-item" style="height: 70vh;">
                                <h5>Terremoto</h5>
                                <p>
                                Um terremoto é um fenômeno natural causado pelo movimento das placas tectônicas da crosta terrestre. Quando essas placas se movem ou se friccionam, acumula-se energia que é liberada na forma de vibrações sísmicas, resultando em tremores que podem causar danos significativos a estruturas e terrenos.
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/phenomena_of_nature/terremoto.jpg')}}" alt="" style="width: 60%;">
                                </div>
                            </div>

                            <!-- CARROUSEL 5 -->
                            <div class="carousel-item">
                                <h5>Avalanche</h5>
                                <p>
                                    É um fenômeno que ocorre quando um acumulo de neve, de gelo e detritos se movimenta rapidamente e de forma violenta, precipitando-se em direção a um vale.
                                    Na descida, uma avalanche é capaz de arrastar rochas, árvores e construções, podendo atingir uma média de 160 km por hora. Pode ser provocada por diversas causas, como a ação dos ventos, propagação de sons e até mesmo, pela passagem de esquiadores.
                                </p>
                                <p><strong>Estável: </strong>quando cava um buraco na neve, uma camada de neve estável deve lembrar um pedaço de bolo de aniversário. A parte mais de baixo deve ser mais firme e permanece uniforme, com uma camada mais leve e macia na superfície.</p>
                                <p>
                                <strong>Instável:</strong> Se camadas mais duras sobrepõem camadas mais macias, qualquer perturbação (neve recente, dias mais quentes, chuva, e claro, esquiadores ou montanhistas) pode desencadear o colapso dessas camadas frágeis e fazer com que as camadas densas superiores deslizem.</p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/phenomena_of_nature/avalanche.jpg')}}" alt="" class="img-temp-material" srcset="">
                                </div>                              
                            </div>

                            <!-- CARROUSEL 7 -->
                            <div class="carousel-item">
                                <h5>Furacões, Tufões e Ciclones</h5>
                                <p>
                                    Furacões, tufões e ciclones são termos regionais para o mesmo tipo de fenômeno climático: tempestades tropicais de alta intensidade. A diferença está em sua localização geográfica. "Furacão" é usado no Atlântico e no nordeste do Pacífico, "tufão" no noroeste do Pacífico e "ciclone" no sul do Pacífico e no Oceano Índico.</p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/phenomena_of_nature/furacao.jpg')}}" alt="" class="img-temp-material" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 8 -->
                            <div class="carousel-item" style="height: 70vh;">
                                <h5>Tornados</h5>
                                <p>
                                    Tornados são colunas rotativas de ar altamente energético que descem das nuvens de tempestade até a superfície terrestre. Essas violentas correntes de ar giratórias podem causar devastação localizada, com ventos extremamente fortes capazes de arrancar árvores, destruir edifícios e criar trajetórias de destruição intensa em sua passagem.
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/phenomena_of_nature/tornado.jpg')}}" alt="" class="img-temp-material" srcset="">
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

                            <!-- CARROUSEL -->
                            <div class="carousel-item">
                                <h5>Vulcão</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de um Vulcão.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/vulcao.jpg')}}" class="img-qrcode" srcset="">
                                        <figcaption style="margin-top: -30px">
                                            Vulcão
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
