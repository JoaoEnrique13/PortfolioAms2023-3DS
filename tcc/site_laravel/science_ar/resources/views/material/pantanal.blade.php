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
@section('title', 'Science Ar - Bioma Pantanal')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <main class="main-material">    

        <p class="tituloCentralizado title-material">Bioma Pantanal</p>

        <div class="row row-nav-material">
            <div class="col-2 col-nav-material">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column" style="position: sticky!important; top: 20px">
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="10" id="10"  href="#carouselExample" style= "order: 10!important">Jacaré</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="9" id="9"  href="#carouselExample" style= "order: 9!important">Vitória-régia</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="8" id="8"  href="#carouselExample" style= "order: 8!important">QR Code</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="7" id="7"  href="#carouselExample" style= "order: 7!important">Hidrografia</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="6" id="6"  href="#carouselExample" style= "order: 6!important">Solo</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="5" id="5"  href="#carouselExample" style= "order: 5!important">Relevo</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="4" id="4"  href="#carouselExample" style= "order: 4!important">Clima</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="3" id="3"  href="#carouselExample" style= "order: 3!important">Fauna</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="2" id="2"  href="#carouselExample" style= "order: 2!important">Vegetação</a>
                        <a class="nav-link link-material ms-3 my-1" id="1"  data-bs-target="#carouselExample" data-bs-slide-to="1" href="#carouselExample" style= "order: 1!important">Flora</a>
                        <a class="nav-link link-material" data-bs-slide-to="0" id="0" data-bs-target="#carouselExample" href="#carouselExample" style= "order: 0!important">Bioma Pantanal</a>
                    </nav>
                </nav>
            </div>

            <div class="col conteudo-material">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" tabindex="0">
                    <div id="carouselExample" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <!-- CARROUSEL 1 -->
                            <div class="carousel-item active">
                                <h4>Pantanal</h4>
                                <p> 
                                    O Pantanal ocupa uma área de 150.355 Km², é o menor bioma brasileiro, possuindo quase 2% do território brasileiro e é constituído principalmente por savana estépica alagada.  
                                </p>
                                <p>Está localizado no Centro-Oeste do Brasil, no sul do Mato Grosso, onde ocupa 7% do território e noroeste do Mato Grosso do Sul, onde ocupa 25% do território. Também ocupa o norte do Paraguai e leste da Bolívia.</p>
                              
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/pantanal/localizacao.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Mapa de localização do Pantanal no território brasileiro. Fonte: Alta Montanha.</figcaption>
                                    </figure>                                  
                                </div>
                            </div>

                            <!-- CARROUSEL 2 -->
                            <div class="carousel-item">
                                <h5>Flora </h5>
                                <p>Possuindo uma grande biodiversidade, são mais de 2000 mil espécies de plantas listada pela Embrapa - Brasil, onde tem, arbustos, árvores e plantas aquáticas, e floresta densa e fechada. </p>
                                <p>Há destaque para as espécies camalote-da-meia-noite e vitória-régia. Tem nessa flora diversas espécies endêmicas. </p>
                                <p>A flora tem alto potencial econômico: 
                                    <ul>
                                        <li>Pastagens nativas</li>
                                        <li>Plantas apícolas</li>
                                        <li>Comestíveis</li>
                                        <li>Medicinais</li>
                                    </ul>
                                </p>
                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/camalote.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Planta Camalote</figcaption>
                                    </figure>   
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/vitoria_regia.jpg')}}" class="img-horizontal-material" srcset="" >
                                        <figcaption>Vitória-régia. Fonte: adventureclub</figcaption>
                                    </figure>                                   
                                </div>
                            </div>

                            <!-- CARROUSEL 3 -->
                            <div class="carousel-item" >
                                <h5>Vegetação</h5>
                                <p>
                                    Por ser um bioma com ligações próximas à Floresta Amazônica, ao Cerrado e a Mata Atlântica, a paisagem pantaneira é bem diversificada, 
                                    com árvores de médio e grande porte, típicas da Amazônia, mas também conta com a presença de árvores tortuosas de baixo e médio porte,
                                    muito comuns no Cerrado. 
                                </p>
                                <p>
                                    Nas matas ciliares, próximas dos rios, é comum encontrarmos jenipapos de 20 metros de altura, árvore amazônica. Nessa área, a vegetação 
                                    é densa e exuberante, com figueiras, ingazeiros, e outras árvores altas.
                                </p>
                                <p>
                                    As planícies inundadas do Pantanal possuem uma vegetação típica dessa localidade, como os vegetais aquáticos: aguapé, erva-de-santa-luzia, 
                                    utriculária e cabomba, muitos deles utilizados para fins medicinais.
                                </p>
                                <p>
                                    Nas áreas não tão alagadas, a presença de árvores do Cerrado é frequente, como os ipês e buritis.
                                </p>
                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/jenipapa.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Jenipapo</figcaption>
                                    </figure>   
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/erva_santa_luzia.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Planta medicinal, erva-de-santa-luzia. Imagem: Régis Stacke.</figcaption>
                                    </figure>     
                                    <figure class="figure-material">
                                        <img class="img-horizontal-material" src="{{asset('img/img_materiais/pantanal/utricularia.jpg')}}" srcset="">
                                        <figcaption>Planta carnívora aquática, Utriculária. Imagem: V.F.O. de Miranda (LSVP/Unesp)</figcaption>
                                    </figure>                                  
                                </div>
                            </div>

                            <!-- CARROUSEL 4 -->
                            <div class="carousel-item">
                                <h5>Fauna</h5>
                                <p>
                                    A fauna é muito rica, possuindo quase todos os animais que vivem no Brasil. Como assim? Isso acontece, porque o bioma sofre influência de
                                    outros biomas como, Amazônia, Cerrado e Mata Atlântica.</p>
                                <p>
                                    Possui esses animais: 
                                    <ul>
                                        <li><strong>132 espécies de mamíferos: </strong>anta, capivara, veado, onça-pintada, morcego; </li>
                                        <li><strong>85 espécies de répteis,</strong> sendo os jacarés com a maior variedade; </li>
                                        <li><strong>463 espécies de aves:</strong> tucano, arara, tuiuiú, carão; </li>
                                        <li><strong>35 espécies de anfíbios,</strong> como a rã-verde; </li>
                                        <li><strong>263 espécies de peixes:</strong> pacu, pintado, bagre, traíra, dourado, piau, jaú (o maior da região). </li>
                                    </ul>
                                </p>
                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/jau.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Jaú, maior peixe da região. Fonte: Guia Animal</figcaption>
                                    </figure>   
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/pintado.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Peixe Pintado. Fonte: Guia Animal</figcaption>
                                    </figure>     
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/carao.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Carão. Fonte: Marcos Paiva (Fotografia de vida selvagem (wildlife photographer))</figcaption>
                                    </figure>    
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/tuiuiu.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Tuiuiú é a ave símbolo do Pantanal, considerada a maior ave voadora. Fonte: Agro Floresta Amazônia</figcaption>
                                    </figure>                              
                                </div>
                            </div>

                            <!-- CARROUSEL 5 -->
                            <div class="carousel-item">
                                <h5>Clima </h5>
                                <p>Predomina o clima tropical, caracterizado pelas duas estações do ano bem definidas, inverno e verão. </p> 
                                <p>O inverno acontece de abril até setembro, não chove e tem temperaturas elevadas, com média de 25º C. Mais chamado de inverno seco. </p>
                                <p>E o verão começa em outubro até março, tendo chuvas regularmente e temperaturas elevadas, com média em torno dos 30º C. O verão chuvoso.</p> 
                                <p>Dessa maneira, na época das chuvas, ou seja, no verão, o Pantanal fica praticamente intransitável por terra por estar inundado. Enquanto no período 
                                    da seca, no inverno, os rios secam e sobra o barro, daí seu nome "Pantanal".</p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/pantanal/clima.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Fonte: Freeway</figcaption>
                                    </figure>                                  
                                </div>
                            </div>

                            <!-- CARROUSEL 6 -->
                            <div class="carousel-item">
                                <h5>Relevo</h5>
                                <p>Localizado em área de planície, com altitudes médias em torno de 120 metros. Possui perfil do relevo bastante regular, e por esse motivo, apresenta
                                    diversas áreas e bacias de inundação, no verão, essas áreas chegam a ser 80% do bioma.</p>
                                <p>Ao seu redor, localiza-se diversos planaltos, responsáveis por serem divisores de águas e por terem nascentes que alimentam a hidrografia do local. </p>
                                <p>Dos planaltos ao redor, o mais famoso é o maciço Urucum, no Mato Grosso do Sul, com um pico culminante de 1065 metros de altitude. Nessa unidade de relevo, 
                                    encontramos uma das maiores reservas de manganês do Brasil, mineral bastante utilizado em indústrias siderúrgicas. </p>
                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/relevo.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Fonte: Toda Matéria.</figcaption>
                                    </figure>                                   
                                </div>
                            </div>

                            <!-- CARROUSEL 7 -->
                            <div class="carousel-item">
                                <h5>Solo</h5>
                                <p>
                                    Por tratar-se de uma região onde há alagamentos constantes, os solos pantaneiros são pouco desenvolvidos e apresentam alto índice de lixiviação 
                                    (quando há a lavagem da camada superficial do solo), onde contribui para o baixo grau de fertilidade do solo da região.</p>
                                <p>De acordo com a Embrapa, os solos mais comuns na região são: 
                                     <ul>
                                        <li>Planossolos </li>
                                        <li>Espodossolos </li>
                                        <li>Gleissolos </li>
                                     </ul>
                                </p>
                                <p>
                                     A inundação faz com que a matéria orgânica se decomponha de forma lenta, por isso é um solo pouco fértil.  
                                </p>
                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/solo.jpg')}}" class="w-100" srcset="">
                                        <figcaption>© WWF-Brasil / Adriano Gambarini</figcaption>
                                    </figure>                                   
                                </div>
                            </div>

                            <!-- CARROUSEL 8 -->
                            <div class="carousel-item">
                                <h5>Hidrografia </h5>
                                <p>
                                A água no Pantanal é um fator decisivo no equilíbrio da fauna e da flora. Durante as cheias no verão, estima-se que 180 milhões de litros d’água atinjam a planície do bioma. </p>
                                    <p>Toda essa água acumula-se na planície, formando as áreas inundadas: pântanos, brejos, lagoas e baías que se interligam aos rios. O relevo contribui para essa ligação 
                                        devido a sua baixa declividade.</p>
                                    <p>A região compõe a macro bacia hidrográfica do rio Prata e possui rios importantes, como: 
                                    <ul>
                                        <li>Rio Paraguai </li>
                                        <li>Rio Cuiabá </li>
                                        <li>Rio Taquari </li>
                                        <li>Rio Piquiri </li>
                                        <li>Rio São Lourenço </li>
                                    </ul>
                                </p>
                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/rio_paraguai.jpg')}}" class="w-100" srcset="">
                                        <figcaption>O Pantanal está inserido na Bacia do Paraguai, e o rio tem grande importância no abastecimento hídrico desse bioma. Fonte: Brasil Escola.</figcaption>
                                    </figure>       
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pantanal/rio_cuiaba.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Rio Cuiabá na altura da região de Porto Jofre. Foto: Gustavo Figueirôa</figcaption>
                                    </figure>                                
                                </div>
                            </div>

                            <!-- CARROUSEL 9 -->
                            <div class="carousel-item">
                                <h5>QR Code</h5>
                                <p>
                                    Após concluir a revisão do material, você está pronto para acessar uma experiência enriquecedora. Abra o aplicativo de realidade aumentada Science AR e faça a varredura do QR Code abaixo. Isso proporcionará acesso a um empolgante modelo tridimensional.
                                </p>
                                <p><strong>Baixe o App:</strong></p>
                                <p class="p-img-baixar-app">
                                    {{-- <a href="" class="link-baixar-app">
                                        <img src="{{asset('img/ios.png')}}" class="img-baixar-app">
                                        iOS
                                    </a> --}}

                                    <a href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=drive_link" class="link-baixar-app">
                                        <img src="{{asset('img/android.png')}}" class="img-baixar-app">
                                        Android
                                    </a>
                                </p>
                                
                            </div>

                            <!-- CARROUSEL -->
                            <div class="carousel-item">
                                <h5>Vitória-régia</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de uma Vitória-régia.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/vitoria_regia.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Vitória-régia
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <!-- CARROUSEL -->
                            <div class="carousel-item">
                                <h5>Jacaré</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de um Jacaré.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/jacare.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Jacaré
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
