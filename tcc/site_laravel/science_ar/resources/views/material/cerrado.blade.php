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
@section('title', 'Science Ar - Bioma Cerrado')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <main class="main-material">    

        <p class="tituloCentralizado title-material">Bioma Cerrado</p>

        <div class="row row-nav-material">
            <div class="col-2 col-nav-material">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column" style="position: sticky!important; top: 20px">
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="8" id="8"  href="#carouselExample" style= "order: 8!important">Onça-Pintada</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="7" id="7"  href="#carouselExample" style= "order: 7!important">Jabuticabeira</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="6" id="6"  href="#carouselExample" style= "order: 6!important">QR Code</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="5" id="5"  href="#carouselExample" style= "order: 5!important">Tipos de Cerrado</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="4" id="4"  href="#carouselExample" style= "order: 4!important">Solo</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="3" id="3"  href="#carouselExample" style= "order: 3!important">Fauna</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="2" id="2"  href="#carouselExample" style= "order: 2!important">Clima</a>
                        <a class="nav-link link-material ms-3 my-1" id="1"  data-bs-target="#carouselExample" data-bs-slide-to="1" href="#carouselExample" style= "order: 1!important">Vegetação e Flora</a>
                        <a class="nav-link link-material" data-bs-slide-to="0" id="0" data-bs-target="#carouselExample" href="#carouselExample" style= "order: 0!important">Bioma Cerrado</a>
                    </nav>
                </nav>
            </div>

            <div class="col conteudo-material">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" tabindex="0">
                    <div id="carouselExample" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <!-- CARROUSEL 1 -->
                            <div class="carousel-item active">
                                <h4>Cerrado</h4>
                                <p> 
                                    Esse bioma é o segundo maior da América do Sul e o segundo maior bioma brasileiro, onde ocupa uma área de 2.036.448, correspondente a mais de 22% 
                                    do território e é constituído principalmente por savanas. 
                                </p>
                                <p> 
                                    O cerrado abrange os estados de Goiás, Tocantins, Mato Grosso, Mato Grosso do Sul, Minas Gerais, Bahia, Maranhão, Piauí, Rondônia, Paraná, São Paulo 
                                    e Distrito Federal, além dos encraves no Amapá, Roraima e Amazonas. Também ocupa o nordeste do Paraguai, leste da Bolívia.
                                </p>
                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/cerrado/introducao.jpg')}}" class="img-material-mobile" srcset="">
                                        <figcaption>Expansão do Bioma Cerrado nos estados brasileiros.</figcaption>
                                    </figure>                                  
                                </div>
                            </div>

                            <!-- CARROUSEL 2 -->
                            <div class="carousel-item">
                                <h5>Vegetação e Flora</h5>
                                <p>
                                    A paisagem é predominantemente caracterizada por grandes formações savânicas, contendo milhares de espécies de plantas nativas, sendo, aproximadamente, 
                                    <strong>4.400 espécies endêmicas</strong>  (existem apenas nesse bioma).
                                </p>
                                <p>
                                    Por causa da sua extensão, o bioma não possui uma fitofisionomia (aspecto da vegetação de uma região) única. A vegetação é bastante diversificada, variando 
                                    de formas campestres, como os campos limpos, a formações florestais densas, como os cerradões. Os fatores que possibilitam essa variedade de fisionomias estão 
                                    relacionados com os tipos de solo, tipos de clima e tipos de relevo nas regiões que abrigam o Cerrado.
                                </p>
                                <p>
                                    Existem onze principais tipos de vegetação, e estão distribuídos em formações savânicas, florestais e campestres. Estas fitosionomias tem uma grande variedade 
                                    de espécies.
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/cerrado/fitofisionomias.jpg')}}" class="w-100" srcset="">
                                </div>
                                <br>
                                <p>
                                    Já as espécies de plantas encontradas no Cerrado, como as arbóreas, as herbáceas, as arbustivas e os cipós, dividem-se em dois estratos:
                                </p>
                                <p>
                                    <strong>Estrato lenhoso: </strong>possui árvores longas e arbustos com troncos grossos e tortuosos. Suas raízes podem chegar a 15 metros de profundidade, o que 
                                    possibilita que essa vegetação encontre água para se manter no período das secas.
                                </p>
                                <p>
                                    <strong>Estrato herbáceo: </strong> possui arbustos e ervas. É formado por vegetações mais baixas onde as raízes chegam a 30 cm de profundidade. No período das 
                                    secas, os ramos secam e ficam propícios a queimadas.
                                </p>
                                <p>
                                    Como eles possuem características diferentes, um pode acabar prejudicando o outro, porque precisam de condições especificas para se desenvolveram.
                                </p>
                                <p>
                                    Por exemplo, a característica da formação herbácea é a ausência de sombra. Então, se tiver uma concentração da formação lenhosa, a herbácea terá problemas para 
                                    se desenvolver, porque a sombra não ajuda no seu crescimento.
                                </p>
                                <p>
                                    Como existe diversificação vegetal no bioma, há árvores que alcançam até 20 metros de altura e também cactos e orquídeas (encontrados nas áreas de chapadões). 
                                    E por isso dão tonalidades em sua vegetação. As principais cores no bioma são verdes, amarelo e tons amarronzados pela descoloração da vegetação causado pela forte 
                                    ocorrência do sol.
                                </p>
                                <p>
                                    As principais espécies vegetais do Cerrado são:
                                    <ul>
                                        <li>Ipê</li>
                                        <li>Pau-terra</li>
                                        <li>Angico</li>
                                        <li>Barbatimão</li>
                                        <li>Aroeira</li>
                                        <li>Copaíba</li>
                                        <li>Jabuticaba</li>
                                    </ul>
                                </p>

                                <br>
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/cerrado/aroeira.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Frutos da Aroeira. (Foto: Giselda Person/ TG).</figcaption>
                                    </figure>
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/cerrado/pau_terra.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Frutos do Pau-terra.</figcaption>
                                    </figure>
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/cerrado/barbatimao.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Barbatimão. Imagem: Eurico Zimbres/Wikimedia Commons</figcaption>
                                    </figure>                                                           
                            </div>

                            <!-- CARROUSEL 3 -->
                            <div class="carousel-item">
                                <h5>Clima</h5>
                                <p>
                                    Na maioria do tempo, possui o clima tropical sazonal, apresenta invernos secos e verões chuvosos. O período seco começa em maio e termina e setembro. O período 
                                    chuvoso inicia em outubro e se estende até abril. A temperatura média fica em torno de 22º C, variando ao longo dos períodos.
                                </p>
                                <p>
                                    Os índices pluviométricos variam de acordo com os limites que o Cerrado faz com outros biomas. Em regiões próximas ao bioma Caatinga, o índice pluviométrico fica 
                                    entre 600 mm e 800 mm. Já no limite com a Amazônia, a precipitação chega a 2200 mm. Em média, a precipitação é de 1500 mm.
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/cerrado/clima.jpeg')}}" class="img-horizontal-material" srcset="">
                                </div>                        
                            </div>

                            <!-- CARROUSEL 4 -->
                            <div class="carousel-item">
                                <h5>Fauna</h5>
                                <p>
                                    A fauna do bioma é muito diversificada, possui muitas espécies animais, se destacam os insetos. Essa variedade é pela limitação que esse bioma faz com os demais. 
                                </p>
                                <p>
                                    Infelizmente, a fauna do Cerrado é pouco conhecida. Então, vamos descobrir quais animais tem nesse bioma incrível!
                                </p>
                                <p>
                                    Os principais exemplos da fauna do Cerrado são: lobo-guará, jararaca, veado-campeiro, anta, tatu, cachorro-do-mato, papagaio, seriema, tucano, ema, tamanduá-bandeira, 
                                    onça-pintada, entre outros.
                                </p>
                                <p>
                                    A fauna desse bioma é composta por:
                                    <ul>
                                        <li>837 espécies de aves, das quais 29 são endêmicas;</li>
                                        <li>185 espécies de répteis, das quais 24 são endêmicas;</li>
                                        <li>194 espécies de mamíferos, das quais 19 são endêmicas;</li>
                                        <li>150 espécies de anfíbios, das quais 45 são endêmicas;</li>
                                        <li>cerca de 14425 espécies de invertebrados.</li>
                                    </ul>

                                    <p>Incrível ver que o Cerrado possui várias espécies endêmicas!</p>

                                    <p>Abaixo irá mostrar alguns animais que vivem no bioma... Vamos ver.</p>
                                </p>

                                    <div class="img-center">
                                        <figure class="figure-material">
                                            <img src="{{asset('img/img_materiais/cerrado/siriema.jpg')}}" class="img-vertical-material" srcset="">
                                            <figcaption>Siriema. Fonte: Agro2.0</figcaption>
                                        </figure> 
                                        <br>
                                        <figure class="figure-material">
                                            <img src="{{asset('img/img_materiais/cerrado/tamandua_bandeira.jpg')}}" class="img-horizontal-material" srcset="">
                                            <figcaption>Tamanduá-bandeira. Foto: Daniel Alves/FPMZB.</figcaption>
                                        </figure> 
                                        <br>
                                        <figure class="figure-material">
                                            <img src="{{asset('img/img_materiais/cerrado/lobo_guara.jpg')}}" class="img-horizontal-material" srcset="">
                                            <figcaption>Lobo-guará. Fonte: Brasil Escola.</figcaption>
                                        </figure> 
                                    </div>                                                         
                            </div>

                            <!-- CARROUSEL 5 -->
                            <div class="carousel-item">
                                <h5>Solo</h5>
                                <p>No bioma Cerrado, podemos encontrar solos como o latossolo, o podzólico que pode ser chamado de argiloso.</p>
                                <p><strong>Latossolo: </strong> solo ácido com coloração avermelhada e pobre em nutrientes.</p>
                                <p><strong>Podzólico: </strong> solo que apresenta coloração mais escura em tons avermelhados. É suscetível a processos erosivos.</p>
                                <p>
                                    Os solos são pouco profundos, drenados e antigo. Sua coloração é avermelhada e, por serem excessivamente porosos e permeáveis, são suscetíveis a intensos processos de 
                                    lixiviação (processo erosivo ocasionado pela lavagem do solo pelo escoamento das águas superficiais). 
                                </p>
                                <p>
                                    As texturas são muitas, mas a principal são os solos arenosos ou argilosos, como areia, argila e silte.
                                </p>
                                <p>
                                    Por seu pH dar a característica de solo ácido, dificultava o desenvolvimento da agricultura, mas com os avanços tecnológicos, é possível corrigir a acidez por meio de 
                                    processos com a calagem. 
                                </p>
                                <p>
                                    Em algumas partes do Cerrado, o solo possui couraças que dificulta a filtração de água, e impossibilita o desenvolvimento de vegetais e impede a agricultura.
                                </p>

                                <figure class="figure-material">
                                    <img src="{{asset('img/img_materiais/cerrado/latossolo.jpg')}}" class="img-horizontal-material" srcset="">
                                    <figcaption>Solo Latossolo.</figcaption>
                                </figure>
                            </div>

                            <!-- CARROUSEL 6 -->
                            <div class="carousel-item">
                                <h5>Tipos de Cerrado</h5>
                                <p>
                                    Como dito, nesse bioma existe fitofisionomias, que se diferenciam de acordo com as regiões contidas. A fitofisionomias existem, porque o bioma é muito extenso e faz 
                                    fronteira com diversos outro.           
                                </p>
                                <p>
                                    Esses são as fitofisionomias que existem no Cerrado:
                                    <ul>
                                        <li>Campos Limpos</li>
                                        <li>Campo Sujo</li>
                                        <li>Cerrado Stricto Senso</li>
                                        <li>Mata Seca</li>
                                        <li>Cerradão</li>
                                        <li>Matas de Galerias</li>
                                        <li>Veredas</li>
                                        <li>Cerrado Rupestre</li>
                                    </ul>
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/cerrado/tipo_cerrado.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Imagem: Divulgacão | National Geographic Brasil.</figcaption>
                                    </figure>
                                </div> 
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

                            <!-- CARROUSEL 10 -->
                            <div class="carousel-item">
                                <h5>Jabuticabeira</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de uma Jabuticabeira.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/jabuticabeira.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Jabuticabeira
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <!-- CARROUSEL 11 -->
                            <div class="carousel-item">
                                <h5>Onça-Pintada</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de uma Onça-Pintada.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/onca_pintada.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Onça-Pintada
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
