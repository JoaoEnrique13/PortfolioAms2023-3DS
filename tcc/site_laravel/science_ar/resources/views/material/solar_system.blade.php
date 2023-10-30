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
@section('title', 'Science Ar - Sistema Solar')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <main class="main-material">    

        <p class="tituloCentralizado title-material">Sistema Solar</p>

        <div class="row row-nav-material">
            <div class="col-2 col-nav-material">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column" style="position: sticky!important; top: 20px">
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="9" id="9"  href="#carouselExample" style= "order: 9!important">Asteroide</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="8" id="8"  href="#carouselExample" style= "order: 8!important">Sol</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="7" id="7"  href="#carouselExample" style= "order: 7!important">Terra</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="6" id="6"  href="#carouselExample" style= "order: 6!important">Sistema Solar</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="5" id="5"  href="#carouselExample" style= "order: 5!important">QR Code</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="4" id="4"  href="#carouselExample" style= "order: 4!important">Astros do Sistema Solar</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="3" id="3"  href="#carouselExample" style= "order: 3!important">Características da principal estrela: Sol</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="2" id="2"  href="#carouselExample" style= "order: 2!important">Características dos Planetas</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="1" id="1"  href="#carouselExample" style= "order: 1!important">Classificação dos Planetas</a>
                        <a class="nav-link link-material" data-bs-slide-to="0" id="0" data-bs-target="#carouselExample" href="#carouselExample" style= "order: 0!important">Sistema Solar</a>
                    </nav>
                </nav>
            </div>

            <div class="col conteudo-material">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" tabindex="0">
                    <div id="carouselExample" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <!-- CARROUSEL 1 -->
                            <div class="carousel-item active">
                                <h4>Sistema Solar</h4>
                                <p> 
                                    O sistema solar é um conjunto formado por 8 planetas e outros corpos celestes que orbitam ao redor do Sol (principal estrela).
                                </p>
                                <p>
                                    Está localizado na via Láctea, uma das galáxias que formam o universo.
                                </p>
                                <p>
                                    Os planetas são: Mercúrio, Vênus, Terra, Marte, Júpiter, Saturno, Urano e Netuno.
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/introducao.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Ordem dos planetas. Fonte: Mundo Educação.</figcaption>
                                    </figure>            
                                </div>
                            </div> 

                            <div class="carousel-item">
                                <h5>Classificação dos Planetas</h5>
                                <p> Os oito planetas são classificados de acordo com suas posições em relação ao Sol.</p>
                                <p>Podem ser classificados em:</p>
                                <p>
                                    <strong>Planetas telúricos, terrestres ou rochosos: </strong>são os quatro planetas mais próximos do Sol (Mercúrio, Vênus, Terra e Marte). São caracterizados por serem feitos de rochas, ferro e metais pesados e por conterem maior densidade, sendo que os materiais mais densos possuem tendência de estarem mais próximos ao Sol.
                                </p>
                                <p>
                                    <strong>Planetas jovianos, gigantes ou gasosos: </strong>são os quatro planetas mais distantes do Sol (Júpiter, Saturno, Urano e Netuno). São maiores que os planetas telúricos. Caracterizado por serem formados de gases como hélio e hidrogênio, são menos densos, por isso são mais distantes do Sol.
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/introducao.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Ordem dos planetas. Fonte: Mundo Educação.</figcaption>
                                    </figure>            
                                </div>
                            </div> 

                            <div class="carousel-item">
                                <h5>Características dos Planetas</h5>
                                <br>
                                <h5>1. Mercúrio</h5>
                                <p> 
                                    <strong>O planeta mais próximo do Sol.</strong> Capaz de refletir cerca de 12% da luz solar, sendo um dos astros mais brilhantes vistos da Terra. Por ser próximo ao Sol, possui 
                                    temperaturas altas, podendo atingir 430ºC durante o dia, provocadas também pela ausência de uma camada de gases completas, como a atmosfera terrestre.
                                </p>
                                <p>
                                    A superfície é repleta de crateras, enquanto seu núcleo é rico em ferro, e a espécie de atmosfera existente no planeta é composta, em sua maioria, por hélio (98%) 
                                    e hidrogênio (2%). Não possui satélites naturais.
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/mercurio.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Mercúrio é o menor planeta do sistema solar / Imagem: Divulgação/Nasa</figcaption>
                                    </figure>            
                                </div>

                                <h5>2. Vênus</h5>
                                <p>
                                    Segundo planeta, conhecido como Estrela D’Alva, por ser um dos astros mais brilhantes no céu a noite. Possui características parecidas com as da Terra, porém não possui nenhum sinal 
                                    de formas de vida.
                                </p>
                                <p>
                                    É o planeta mais quente do sistema solar, pois é composta por CO2, que faz com que a temperatura do planeta seja alta, alcançando 460ºC.
                                </p>
                                <p>
                                    Possui uma atmosfera 92 vezes mais densa que a atmosfera terrestre, com o planeta quase sempre envolto por nuvens.
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/venus.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Imagem: Unsplash/Nasa</figcaption>
                                    </figure>            
                                </div>

                                <h5>3. Terra</h5>
                                <p>
                                    O planeta diferente, pois é o único que possui formas de vida. 
                                </p>
                                <p>
                                    A temperatura média é de 14ºC, e apenas 60% da energia solar é absorvida. A atmosfera é composta por gases, como nitrogênio, oxigênio, gás carbônico e vapor d’água.
                                </p>
                                <p>
                                    A estrutura interna é composta pelo núcleo, manto e crosta terrestre e possui um satélite natural que é a Lua. 
                                </p>
                                <p>
                                    A Terra é um planeta rochoso, formado por silicatos e basaltos, além de apresentar diversos recursos minerais.
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/terra.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Imagem: Unsplash/Nasa</figcaption>
                                    </figure>            
                                </div>

                                <h5>4. Marte</h5>
                                <p>
                                    Conhecido como “planeta vermelho”, devido a coloração avermelhada causada pela oxidação de minerais de ferro na atmosfera, Marte apresenta uma superfície rochosa, fria e empoeirada, composta por magnetite,
                                    que confere ao solo marciano uma cor avermelhada.
                                </p>
                                <p>
                                    O solo é rico em ferro e silício. A atmosfera do planeta é menos espessa que a da Terra, sendo constituída especialmente por CO2, nitrogênio, vestígios de oxigênio, 
                                    monóxido de carbono e vapor d'água. As temperaturas podem variar entre -76ºC e -10ºC.
                                </p>
                                <p>
                                Esse é um dos planetas mais estudados do sistema solar, segundo a Nasa. A primeira missão bem sucedida em Marte foi realizada em 1965, com o sobrevoo da Mariner 4.

                                Atualmente, os astronautas da empresa preparam-se com uma missão com habitat simulado de Marte para explorar o território com segurança em missões futuras.
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/marte.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Imagem: Unsplash/Nasa</figcaption>
                                    </figure>            
                                </div>

                                <h5>5. Júpiter</h5>
                                <p>
                                    Conhecido como “gigante gasoso” e o quinto planeta, é o maior planeta do Sistema solar, também possui a maior velocidade de rotação. Sua aparência apresenta tons de vermelho, laranja, marrom e amarelo.
                                </p>
                                <p>
                                    Mesmo sendo o planeta com maior massa, ele não é o mais denso, visto que é composto por gases, especialmente hélio e hidrogênio. Acredita-se que o planeta possua um núcleo rochoso e não se sabe ao certo se possui uma superfície definida. 
                                </p>
                                <p>Júpiter apresenta sistema de anéis e conta com mais de 75 luas – algumas delas com oceanos sob as crostas.</p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/jupiter.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Júpiter é o maior planeta do sistema solar / Imagem: Unsplash/Nasa</figcaption>
                                    </figure>            
                                </div>

                                <h5>6. Saturno</h5>
                                <p>
                                    Segundo maior planeta do Sistema Solar, conhecido por seus anéis que se acredita que são feitos de gelo, pois tem um brilho forte, refletindo 80% da luz solar.
                                </p>
                                <p>
                                Titã é o maior satélite do planeta e foi a primeira a ser descoberta, em 1655. Ela é a segunda maior lua do sistema solar e acredita-se que existem oceanos abaixo de sua superfície gelada.
                                </p>
                                <p>
                                    A atmosfera do planeta é constituída, principalmente, por hidrogênio e hélio. A densidade do planeta é bastante inferior à da Terra, por causa da sua composição.
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/saturno.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Imagem: Unsplash/Nasa</figcaption>
                                    </figure>            
                                </div>

                                <h5>7. Urano</h5>
                                <p>Urano é o planeta mais frio do sistema solar, formado por fluídos de materiais como água, amônia e metano congelados, localizados acima de uma superfície rochosa.</p>
                                <p>Descoberto em 1781, possui anéis e são opacos à luz. Apresenta cerca de 27 satélites naturais e cerca de 27 luas.</p>
                                <p>A atmosfera é composta por hidrogênio, hélio e metano (responsável pela cor azulada do planeta). A temperatura é de aproximadamente -218ºC.</p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/urano.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Urano é o planeta mais frio do sistema solar / Imagem: Unsplash/Nasa</figcaption>
                                    </figure>            
                                </div>

                                <h5>8. Netuno</h5>
                                <p>Com uma coloração azul característica, Netuno é outro gigante gasoso e é o último planeta do sistema solar. O planeta é o mais distante do Sol, por isso apresenta uma atmosfera escura e mais fria.</p>
                                <p>
                                A distância também resulta em fortes ventos na superfície e torna Netuno o único planeta do sistema solar que não é visível a olho nu.
                                </p>
                                <p>Possui temperatura média de -218ºC. Netuno possui um sistema de anéis e tem treze satélites, o mais conhecido é o Tritão.</p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/netuno.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Netuno é o último planeta do sistema solar / Imagem: Unsplash/Nasa</figcaption>
                                    </figure>            
                                </div>

                            </div>  

                            <div class="carousel-item">
                                <h5>Sol</h5>
                                <p> 
                                    O Sol é a estrela central do Sistema Solar. Considerado uma estrela média, o Sol tem diâmetro de, aproximadamente, 1,39 bilhão de km (109 vezes maior que a da Terra), 
                                    e sua massa é cerca de 332.900 vezes maior do que a do nosso planeta. Basicamente a estrela é formada por hidrogênio (aproximadamente 90%) e hélio (9%). 
                                </p>
                                <p>O Sol é composto por:</p>
                                <p>
                                    <ul>
                                        <li><strong>Fotosfera: </strong>é a parte visível do Sol que emite luz propagada no espaço, podendo ser notado o fenômeno conhecido como mancha solar.</li>
                                        <li><strong>Núcleo: </strong>é a parte central do Sol que concentra, aproximadamente, metade da massa total da estrela. A temperatura nessa região atinge cerca de 15.000.000°C.</li>
                                        <li><strong>Cromosfera: </strong>é uma camada estreita, rarefeita e não visível do Sol. A temperatura dessa região varia conforme o afastamento do núcleo.</li>
                                        <li><strong>Coroa Solar: </strong>é a parte mais externa do Sol, acima da fotosfera, podendo ser observada apenas em eclipses totais.</li>
                                    </ul>
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/eclipse.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Imagem ilustrativa de um eclipse total, mostrando a coroa solar. (Foto: Pexels)</figcaption>
                                    </figure>            
                                </div>
                            </div> 

                            <div class="carousel-item">
                                <h5>Astros</h5>
                                <p> 
                                    Além dos planetas, satélite e o Sol, o Sistema Solar é formado por outros corpos celestes. 
                                </p>
                                <p>São eles:</p>
                                <p>
                                   <strong>Asteroides: </strong>são pequenos corpos celestes formados por fragmentos de rochas e se encontram espalhados ao longo do espaço. A movimentação desses corpos ocorre de forma aleatória no espaço.
                                </p>
                                <p>
                                    <strong>Cometas: </strong>são corpos celestes de tamanhos diminutos, formados principalmente por fragmentos de rocha e gelo, que têm como especificidade uma cauda luminosa. A luminosidade da cauda dos cometas é fruto de uma reação química proveniente do seu contato com a radiação solar.
                                </p>
                                <p>
                                    <strong>Meteoroides: </strong>são corpos celestes formados por fragmentos de rocha que realizam movimentos diversos. A entrada de um meteoroide na atmosfera é chamada de meteoro, e sua queda no solo, de meteorito.
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/asteroide.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Imagem: Reprodução</figcaption>
                                    </figure>       
                                    <figure>
                                        <img src="{{asset('img/img_materiais/sistema_solar/cometa.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Cometa Nishimura e sua longa cauda de íons (Imagem: Reprodução/Peter Kennett)</figcaption>
                                    </figure>        
                                </div>
                            </div> 

                            <!-- CARROUSEL  -->
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

                            <!-- CARROUSEL  -->
                            <div class="carousel-item">
                                <h5>Sistema Solar</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional do Sistema Solar.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/sistema_solar.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Sistema Solar
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <!-- CARROUSEL  -->
                            <div class="carousel-item">
                                <h5>Terra</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional da Terra.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/terra.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Terra
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <!-- CARROUSEL  -->
                            <div class="carousel-item">
                                <h5>Sol</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional do Sol.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/sol.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Sol
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <!-- CARROUSEL  -->
                            <div class="carousel-item">
                                <h5>Asteroide</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de um Asteroide.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/asteroide.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Asteroide
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
