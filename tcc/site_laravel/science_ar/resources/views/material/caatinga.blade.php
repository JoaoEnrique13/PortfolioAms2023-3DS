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
@section('title', 'Science Ar - Bioma Caatinga')

{{-- Conteudo do site --}}
@section('content')

  <body class="body-material">
    {{-- Menu --}}
    @include('layouts/menu')
    
    <main class="main-material">    

        <p class="tituloCentralizado title-material">Bioma Caatinga</p>

        <div class="row row-nav-material">
            <div class="col-2 col-nav-material">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column" style="position: sticky!important; top: 20px;">
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="9" id="9"  href="#carouselExample" style= "order: 9!important">Ipê-roxo</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="8" id="8"  href="#carouselExample" style= "order: 8!important">Cacto</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="7" id="7"  href="#carouselExample" style= "order: 7!important">QR Code</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="6" id="6"  href="#carouselExample" style= "order: 6!important">Hidrografia</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="5" id="5"  href="#carouselExample" style= "order: 5!important">Solo</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="4" id="4"  href="#carouselExample" style= "order: 4!important">Fauna</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="3" id="3"  href="#carouselExample" style= "order: 3!important">Flora</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="2" id="2"  href="#carouselExample" style= "order: 2!important">Vegetação</a>
                        <a class="nav-link link-material ms-3 my-1" id="1"  data-bs-target="#carouselExample" data-bs-slide-to="1" href="#carouselExample" style= "order: 1!important">Clima</a>
                        <a class="nav-link link-material" data-bs-slide-to="0" id="0" data-bs-target="#carouselExample" href="#carouselExample" style= "order: 0!important">Caatinga</a>
                    </nav>
                </nav>
            </div>

            <div class="col conteudo-material">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" tabindex="0">
                    <div id="carouselExample" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <!-- CARROUSEL 1 -->
                            <div class="carousel-item active">
                                <h4>Caatinga</h4>
                                <p> 
                                    É um bioma exclusivamente brasileiro, ocupa 11% do território nacional, ocupando uma área de 844.453 Km² e 70% da região Nordeste. Fica presente no Ceará ao todo.
                                </p>
                                <p>
                                    Seu nome possui origem tupi-guarani e significa “floresta branca”. Esse nome é a representação da vegetação, porque as folhas caem no período da seca.
                                </p>
                                <div>
                                    <div class="img-center">
                                        <img src="{{asset('img/img_materiais/caatinga/introducao.jpg')}}" class="img-material-100-mobile" srcset="">
                                    </div>
                                </div>

                            </div>

                            <!-- CARROUSEL 2 -->
                            <div class="carousel-item">
                                <h5>Clima</h5>
                                <p>
                                    O bioma apresenta um tropical semiárido. O clima é marcado por seu longo período de estiagem, ou seja, sem chuvas. Tendo seu índice pluviométrico abaixo dos 
                                    800 mm/ano. As temperaturas são geralmente altas, com média de 27º C, mas também pode aumentar e passar de 32º C.
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/caatinga/clima.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 3 -->
                            <div class="carousel-item">
                                <h5>Vegetação</h5>
                                <p>
                                    A vegetação apresenta características de adaptação ao longo período de seca e grande diversidade de espécies vegetais, muitas delas endêmicas 
                                    (desenvolvem-se apenas nessa região).
                                </p>
                                <p>A vegetação possui três estratos:</p>
                                <p><strong>Arbóreo: </strong>com espécies que variam entre 8 e 12 metros de altura;</p>
                                <p><strong>Arbustivo: </strong>com espécies que variam entre 2 e 5 metros de altura;</p>
                                <p><strong>Herbáceo: </strong>com espécies com altura abaixo de 2 metros.</p>
                                <p>
                                    Suas características são o solo raso e pedregroso, árvores baixas, troncos tortuosos e que possuem espinhos e folhas que caem no período da seca, mas nem todas 
                                    as árvores caem as folhas, como o juazeiro. 
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/caatinga/vegetacao.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <br>
                                    <h5>Características das plantas</h5>
                                    <p>
                                        Sabe o que é interessante? Por não chover muito, o cair das folhas acontece, para evitar a perda excessiva de água e também diminuir a ocorrência de processos 
                                        fotossintéticos para que as plantas entrem em estágio de economia de energia.
                                    </p>
                                    <p>
                                        Outra característica marcante é que as raízes das plantas cobrem o solo para que seja possível armazenar água durante o período de chuva. Muito legal, né?!
                                        Existe também outra característica muito interessante, que é a capacidade de algumas plantas de realizar fotossíntese e produzir nutrientes mesmo que não
                                        apresentam folhas. 
                                    </p>
                                    <p>
                                        Algumas espécies de cactáceas, como o mandacaru, possuem uma característica peculiar: suas folhas são modificadas em espinhos para evitar que a planta perca 
                                        água pelo processo de transpiração. Os espinhos são também um mecanismo de defesa dessas plantas a fim de evitar que animais as comam.                                    
                                    </p>
                                    <div class="img-center">
                                        <img src="{{asset('img/img_materiais/caatinga/mandacaru.jpg')}}" class="img-horizontal-material" srcset="">
                                    </div>
                                    
                                    <br>
                                    <p>
                                        Vale dizer também que os cactos, que compõem a formação vegetal desse bioma, apresentam grande capacidade de armazenamento de água. Há também plantas que 
                                        apresentam em suas folhas uma espécie de cera para evitar também a perda de água.
                                    </p>

                            </div>

                            <!-- CARROUSEL 4 -->
                            <div class="carousel-item">
                                <h5>Flora</h5>
                                <p>
                                    A flora da Caatinga é bastante diversificada. O período de floração varia conforme a região, o regime de chuvas e a qualidade dos solos.
                                </p>
                                <p>
                                    Destacam-se os cactos, como o mandacaru e xique-xique; as bromélias, como a macambira; e as leguminosas, como a catingueira.                                 
                                </p>

                                    <h5>Características de algumas espécies da flora</h5>
                                    <p>
                                       <strong>Ipê-roxo: </strong>espécie de planta cujo nome representa a coloração das suas flores. Durante a sua floração, a planta perde as folhas, ficando em 
                                       destaque as flores, que formam densos buquês. Por causa da grande procura dessa espécie para ornamentação, dada a sua exuberância, está ameaçada de extinção.
                                    </p>
                                    <div class="img-center">
                                        <img src="{{asset('img/img_materiais/caatinga/ipe_roxo.jpg')}}" class="img-horizontal-material" srcset="">
                                    </div>
                                    <br>
                                    <p>
                                        <strong>Juazeiro: </strong>espécie de planta cujas folhas permanecem verdes no período de seca por ter raízes que captam umidade no subsolo. É uma das poucas 
                                        espécies que não perdem suas folhas durante a estiagem. 
                                    </p>
                                    <div class="img-center">
                                        <img src="{{asset('img/img_materiais/caatinga/juazeiro.jpg')}}" class="img-horizontal-material" srcset="">
                                    </div>
                                    <br>
                                    <p>
                                        <strong>Macambira: </strong>espécie de bromélia que se desenvolve sob a exposição do sol. Apresenta folhas suculentas, que são utilizadas para alimentação de 
                                        gado e também para produção de farinha e pirão. Seu talo é bastante utilizado para revestir telhados.
                                    </p>
                                    <div class="img-center">
                                        <img src="{{asset('img/img_materiais/caatinga/macambira.jpg')}}" class="img-horizontal-material" srcset="">
                                    </div>    
                            </div>

                            <!-- CARROUSEL 5 -->
                            <div class="carousel-item">
                                <h5>Fauna</h5>
                                <p>
                                    A fauna apresenta bastante diversificação, mas infelizmente não é tão conhecida, essa que possui diversas espécies de animais endêmicos. Os animais que se encontram 
                                    na região apresentam características de adaptação ao clima, assim como as plantas, como o desenvolvimento de hábitos noturnos, comportamentos migratórios e “hibernações".
                                </p>
                                <p>
                                    Dos principais animais que pertencem a este bioma, estão: <strong>ararinha-azul, sapo-cururu, onça-parda, macaco-prego, asa-branca, cotia, tatu-bola, 
                                    preá, tatu-peba, veado-catingueiro, sagui-do- nordeste, guigó-da-caatinga e jacaré-de-papo-amarelo. </strong>
                                </p>
                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/caatinga/sagui_nordeste.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Sagui-do-nordeste (Callithrix jacchus). Foto: Alf Ribeiro / Shutterstock.com</figcaption>
                                    </figure class="figure-material">         
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/caatinga/prea.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Cláudio Dias Timm, alguns direitos reservados (CC BY-NC-SA)</figcaption>
                                    </figure>  
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/caatinga/asa_branca.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Migratória, a presença da asa-branca indica chuva no sertão. Fotos: Pixabay</figcaption>
                                    </figure>  
                                </div>
                                
                            </div>

                            <!-- CARROUSEL 6 -->
                            <div class="carousel-item">
                                <h5>Solo</h5>
                                <p>
                                    O solo definido, segundo o Sistema Brasileiro de Classificação dos Solos, como raso a profundo. É rico em minérios, mas pobre em matéria orgânica, por causa das características
                                    do clima, da hidrografia e da vegetação da região. As texturas são arenosas e argilosas.
                                </p>
                                <p>
                                    O mais comum nesse bioma é o solo raso e pedregoso, o que dificulta o armazenamento de água. Mesmo com essas características, ainda assim esse solo é 
                                    <strong>utilizado para a criação de animais.</strong>
                                </p>
                                <p>
                                    Como principais produtos agrícolas cultivados na Caatinga, podemos citar o <strong> licuri, umbu, caju e maracujá.</strong>
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/caatinga/solo.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 7 -->
                            <div class="carousel-item">
                                <h5>Hidrografia</h5>
                                <p>
                                    O bioma contém dois rios que, em sua maioria, são intermitentes ou temporários. Significa que, os rios correm apenas nos períodos de chuva e secam no período de seca.
                                </p>                  
                                <p>
                                    O rio perene (contém água todo tempo, durante o ano inteiro) mais conhecido é o rio São Francisco. Os rios nascem geralmente nas encostas das serras.
                                </p>
                                <p>
                                    Rios que existem lá:

                                    <li>Rio Poli;</li>
                                    <li>Rio Jaguaribe;</li>
                                    <li>Rio Parnaíba.</li>
                                </p>

                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/caatinga/rio_parnaiba_poti.jpg')}}" class="img-temp-material" srcset="" style="width: 100%">
                                        <figcaption>Encontro das águas entre o Rio Parnaíba e o Rio Poti</figcaption>
                                    </figure>         
                                </div>
                            </div>

                            <!-- CARROUSEL 9 -->
                            <div class="carousel-item" style="height: 90vh;">
                                <h5>QR Code</h5>
                                <p>
                                    Após concluir a revisão do material, você está pronto para acessar uma experiência enriquecedora. Abra o aplicativo de realidade aumentada Science AR e faça a varredura 
                                    do QR Code abaixo. Isso proporcionará acesso a um empolgante modelo tridimensional do Sistema Solar.
                                </p>

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

                            
                            <!-- CARROUSEL 10 -->
                            <div class="carousel-item">
                                <h5>Cacto</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de um Cacto.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/cacto.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Cacto
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <!-- CARROUSEL 11 -->
                            <div class="carousel-item">
                                <h5>Ipê-roxo</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de um Ipê-roxo.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/ip_roxo.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Ipê-roxo
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
