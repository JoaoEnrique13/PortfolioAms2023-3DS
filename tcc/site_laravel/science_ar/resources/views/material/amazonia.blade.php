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
@section('title', 'Science Ar - Bioma Amazônia')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <main class="main-material">    

        <p class="tituloCentralizado title-material">Bioma Amazônia</p>

        <div class="row row-nav-material">
            <div class="col-2 col-nav-material">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column" style="position: sticky!important; top: 20px">
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="13" id="13"  href="#carouselExample" style= "order: 13!important">Pirarucu</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="12" id="12"  href="#carouselExample" style= "order: 12!important">Piranha</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="11" id="11"  href="#carouselExample" style= "order: 11!important">Macaco</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="10" id="10"  href="#carouselExample" style= "order: 10!important">Arara</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="9" id="9"  href="#carouselExample" style= "order: 9!important">QR Code</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="8" id="8"  href="#carouselExample" style= "order: 8!important">Solo</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="7" id="7"  href="#carouselExample" style= "order: 7!important">Relevo</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="6" id="6"  href="#carouselExample" style= "order: 6!important">Hidrografia</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="5" id="5"  href="#carouselExample" style= "order: 5!important">Clima</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="4" id="4"  href="#carouselExample" style= "order: 4!important">Vegetação</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="3" id="3"  href="#carouselExample" style= "order: 3!important">Fauna</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="2" id="2"  href="#carouselExample" style= "order: 2!important">Desmatamento</a>
                        <a class="nav-link link-material ms-3 my-1" id="1"  data-bs-target="#carouselExample" data-bs-slide-to="1" href="#carouselExample" style= "order: 1!important">Bioma Amazônia</a>
                        <a class="nav-link link-material" data-bs-slide-to="0" id="0" data-bs-target="#carouselExample" href="#carouselExample" style= "order: 0!important">O que é um bioma?</a>
                    </nav>
                </nav>
            </div>

            <div class="col conteudo-material">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" tabindex="0">
                    <div id="carouselExample" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <!-- CARROUSEL 1 -->
                            <div class="carousel-item active">
                                <h4>O que é um bioma?</h4>
                                <p> 
                                São regiões que contém grandes ecossistemas formados por uma comunidade biológica com características parecidas. Segundo o Instituto Brasileiro de Geografia e Estatística (IBGE), o Brasil possui seis biomas: 
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/amazonia/img_introducao.jpg')}}" class="img-material-100-mobile" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 2 -->
                            <div class="carousel-item" >
                                <h5>Bioma Amazônia </h5>
                                <p>
                                    O Bioma Amazônico chega a ocupar uma área de 4.196.943 Km², que corresponde mais de 40% do território brasileiro e é formada principalmente por uma floresta tropical. 
                                    A Amazônia ocupa territórios do Acre, Amapá, Amazonas, Pará e Roraima, e parte do território do Maranhão, Mato Grosso, Rondônia e Tocantins, além de se estender por mais
                                    países da América do Sul como Bolívia, Colômbia, Equador, Guiana, Guiana Francesa, Peru, Suriname e Venezuela.
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/amazonia/img_expansao.png')}}" class="img-material-100-mobile" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 2 -->
                            <div class="carousel-item">
                                <h5>Desmatamento </h5>
                                <p>
                                    Mesmo sendo o nosso bioma mais preservado, cerca de 16% de sua área já foi devastada. O desmatamento, as queimadas, a garimpagem, representam os principais problemas ambientais enfrentados.
                                    Esses problemas são responsáveis por graves mudanças climáticas em todo o planeta, como o aquecimento global. Amazônia é considerada um grande “resfriador” atmosférico e como maior abrigo
                                    da biodiversidade do mundo.
                                </p>
                                <figure class="figure-material">
                                    <img src="{{asset('img/img_materiais/amazonia/desmatamento.jpg')}}" class="img-horizontal-material" srcset="">
                                </figure>
                            </div>

                            <!-- CARROUSEL 3 -->
                            <div class="carousel-item">
                                <h5>Fauna</h5>
                                <p>Existem diversos animais convivendo nesse grande bioma. Os mais conhecidos são os macacos, pode ser encontrados diversos tipos de macacos nos galhos das árvores. 
                                    Nas áreas não tão alagadas, a presença de árvores do Cerrado é frequente, como os ipês e buritis.</p>
                                <p>
                                    Possui diversos repteis, lá você encontra lagartos, jacarés, tartarugas e cobras. E de anfíbio, existem vários tipos de sapos, rãs e pererecas, há também insetos que são muito importantes no equilíbrio do ecossistema.
                                </p>
                                <div class="figure-material">
                                    <img src="{{asset('img/img_materiais/amazonia/macaca_barrigudo.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <br>
                                <div class="figure-material">
                                    <img src="{{asset('img/img_materiais/amazonia/peixe_boi.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <br>
                                <p>
                                    E não para por aí! Vamos ver...
                                </p>
                                <p>
                                    Nos rios amazônicos estão 85% das espécies de peixes de toda a América do Sul... Uau, que incrível! Ah, todos os anos milhares de peixes migram para tentar encontrar um lugar 
                                    adequado onde pode reproduzir e desovar.
                                </p>
                                <div class="figure-material">
                                    <img src="{{asset('img/img_materiais/amazonia/tambaqui.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <br>
                                <div class="figure-material">
                                    <img src="{{asset('img/img_materiais/amazonia/pirarucu.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <br>
                                <p>
                                    Há também grande variedade de aves na floresta, como por exemplo, araras, papagaios, periquitos e vários outros. Um deles, são os tucanos que colorem as copas das árvores. 
                                    Mais de mil espécies de aves já foram registradas.
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/amazonia/arara.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/amazonia/tucano.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 4  ///style="height: 70vh;-->
                            <div class="carousel-item">
                                <h5>Vegetação</h5>
                                <p>
                                    A sua vegetação está dividida em três partes: matas de terra firme, matas de várzea e matas de igapó.
                                </p>
                                <p>
                                    <strong>Matas de terra firme: </strong>fica localizada nas regiões altas, por isso não são inundadas pelos rios e sua vegetação sempre é seca. Nessas matas existem as árvores de grande porte, como a castanheira, palmeira e mogno.
                                </p>
                                <br>
                                <figure class="figure-material">
                                    <img src="{{asset('img/img_materiais/amazonia/terra_firme.jpg')}}" class="img-horizontal-material" srcset="">
                                    <figcaption>Foto: Edson Grandisoli.</figcaption>
                                </figure>                                     
                                
                                <br>
                                <p>
                                    <strong>Matas de iguapó: </strong>fica localizada nas regiões baixas. Quase sempre estão inundadas. Sua vegetação é baixa, possuindo arbustos, cipós e musgos e também vitória-régia (planta aquática), um dos símbolos da Amazônia.
                                </p>
                                    <div class="figure-material">
                                        <img src="{{asset('img/img_materiais/amazonia/mata_igapo.jpg')}}" class="img-horizontal-material" srcset="">
                                    </div>
                                </br>
                                <p>
                                    <strong>Matas de várzea: </strong>é inundado em determinados períodos do ano. Na parte mais alta da mata, o tempo de inundação é curto e a vegetação é parecida com a das matas de terra firme. Nas regiões planas, que permanecem inundadas por mais tempo, a vegetação é semelhante à das matas de igapó.
                                </p>

                                <figure class="figure-material">
                                    <img src="{{asset('img/img_materiais/amazonia/mata_varzea.jpg')}}" class="img-horizontal-material" srcset="">
                                    <figcaption>Mata de Várzea. Foto: Marcelo Kuhlmann.</figcaption>
                                </figure>
                            </div>
                                

                            <!-- CARROUSEL 5 -->
                            <div class="carousel-item">
                                <h5>Clima </h5>
                                <p>
                                    Nessa região ocorre muitas chuvas, com índices pluviométricos que variam entre 1.500 mm e 3.600mm por ano. A umidade do ar é elevada, chegando a 80%, e as temperaturas variam entre 22ºC e 28ºC. Chamado de clima equatorial úmido, que caracteriza áreas próximas à linha do equador.  
                                </p>
                                <p>
                                    <strong>E como o clima interfere? </strong>
                                </p>
                                <p>
                                    Vou te dar um exemplo: através da intensidade da chuva sobe o nível dos rios que com esse aumento pode inundar algumas regiões e essas regiões podem ser adequada para viver certos vegetais e animais                                
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/amazonia/clima.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 6 -->
                            <div class="carousel-item">
                                <h5>Hidrografia</h5>
                                <p>
                                    Como sabemos, a água é super importante para nós e para o ecossistema, afinal nada sobrevive sem água. No bioma possui a maior bacia hidrográfica do mundo, a Bacia Amazônica, que detém 20% da água doce do planeta.     
                                </p>
                                <p>
                                    O principal rio é o Rio Amazonas, que possui mais de mil afluentes (rios menores que deságuam nele), o rio é o mais largo do mundo e o responsável pelo desenvolvimento da floresta.                                
                                </p>
                                <p>
                                    Você sabe os principais rios? Vamos ver isso agora!!                                
                                </p>
                                
                                   <ul>
                                        <li><strong>Rio Amazonas: </strong>começa na Cordilheira dos Andes, Peru. Entra no Brasil conhecido como Solimões. Em algumas partes do rio, a largura pode atingir 100 metros, sendo bastante navegável</li>
                                        <li><strong>Rio Negro: </strong>considerado o maior afluente à margem esquerda do Rio Amazonas.  </li>
                                        <li><strong>Rio Tapajós: </strong>começa na divisa entre os estados do Mato Grosso, Pará e Amazonas, desaguando na margem direita do Rio Amazonas.</li>
                                        <li><strong>Rio Madeira: </strong>começa na Cordilheira dos Andes, na Bolívia.</li>
                                    </ul> 
                                <br>

                                <h5>Tipos de rios</h5>                                
                                <p>Os rios são classificados em três tipos: rios de águas barrentas, de águas claras e águas pretas.</p>
                                <p>
                                    <strong>Rios de águas pretas: </strong>são chamados assim, porque nasceram terrenos de planície e carregaram areia e humus (responsável pela coloração das águas) que caracterizam o solo. O Rio Negro é um deles
                                </p>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/amazonia/aguas_pretas.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <br>
                                <p>
                                    <strong>Rios de águas barrentas: </strong>as águas tem a cor modificada por serem ricos em sedimentos e nutrientes, o Rio Amazonas e o Rio Madeira entram para a lista dos rios de águas barrentas.
                                </p>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/amazonia/aguas_barrentas.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <br>
                                <p>
                                    <strong>Rios de águas claras: </strong>possuem trechos de corredeiras e cachoeiras, estes rios não banham tantos terrenos ricos em nutrientes como os de água barrenta, sendo assim, apresentam águas mais clarinhas. O rio Tapajós está nessa lista.
                                </p>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/amazonia/aguas_claras.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <br>
                            </div>

                            <!-- CARROUSEL 7 -->
                            <div class="carousel-item">
                                <h5>Relevo</h5>
                                <p>
                                    Na Amazônia são encontrados três tipos de relevo: planícies, planaltos e depressões.
                                </p>                  
                                    Planícies (terrenos com pouca variação de altitude), depressões (tipo de relevo aplainado, onde são encontradas colinas baixas) e planaltos (terrenos com superfície elevada).
                                </p>
                                </p>                  
                                    As planícies são constantemente inundadas pelos rios. Nos planaltos existem algumas serras, como as de Taperapecó e Parima. Depressões da região norte e sul amazônicas.
                                </p>
                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/amazonia/relevo.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Planaltos, planícies e depressões formam o relevo do bioma amazônico.</figcaption>
                                    </figure>        
                                </div>
                            </div>

                            <!-- CARROUSEL 8 -->
                            <div class="carousel-item">
                                <h5>Solo</h5>
                                <p>
                                    O solo da floresta é em geral bastante arenoso, em seu solo possui camada de nutrientes que vem através das folhas e frutos que caem das árvores e se decompõem 
                                    ou de animais mortos. Também possui muito humus, que é muito importante para algumas espécies de plantas da região.
                                </p>
                                <p>
                                    Mas quando chove nas áreas que estão desmatadas, a água leva todo nutriente do solo, isso é chamado de processo de lixiviação, que deixa os solos amazônicos 
                                    ainda mais pobres. Existe apenas 14% do território que pode ser considerado fértil para agricultura.
                                </p>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/amazonia/solo.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <br>
                                <p>
                                    Mas sabe porque ainda existem tantas árvores apesar do pouco espaço fértil? É aí que entra a importância do humus (decomposição de matéria vegetal e animal).
                                </p>
                                <p>
                                    As árvores absorvem os poucos nutrientes que o humus fornece pelo solo, e elas liberam nutrientes para o enriquecimento do solo. Podemos perceber que a floresta
                                    está em uma constante reciclagem de nutrientes.
                                </p>
                            </div>

                            <!-- CARROUSEL 9 -->
                            <div class="carousel-item" style="height: 90vh;">
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

                            <div class="carousel-item">
                                <h5>Arara</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de uma Arara.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/arara.jpg')}}" class="img-qrcode" srcset="">
                                        <figcaption style="margin-top: -30px">Arara</figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <h5>Macaco</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de um Macaco.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/macaco.jpg')}}" class="img-qrcode" srcset="">
                                        <figcaption style="margin-top: -30px">Macaco</figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <h5>Piranha</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de uma Piranha.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/piranhas.jpg')}}" class="img-qrcode" srcset="">
                                        <figcaption style="margin-top: -30px">Piranha</figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <h5>Pirarucu</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de um Pirarucu.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/pirarocu.jpg')}}" class="img-qrcode" srcset="">
                                        <figcaption style="margin-top: -30px">Pirarucu</figcaption>
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
