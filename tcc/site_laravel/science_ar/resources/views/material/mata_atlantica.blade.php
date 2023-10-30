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
@section('title', 'Science Ar - Bioma Mata Atlântica')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <main class="main-material">    

        <p class="tituloCentralizado title-material">Bioma Mata Atlântica</p>

        <div class="row row-nav-material">
            <div class="col-2 col-nav-material">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="9" id="9"  href="#carouselExample" style= "order: 9!important">Capivara</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="8" id="8"  href="#carouselExample" style= "order: 8!important">Bromélia</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="7" id="7"  href="#carouselExample" style= "order: 7!important">QR Code</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="6" id="6"  href="#carouselExample" style= "order: 6!important">Clima</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="5" id="5"  href="#carouselExample" style= "order: 5!important">Água</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="4" id="4"  href="#carouselExample" style= "order: 4!important">Fauna</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="3" id="3"  href="#carouselExample" style= "order: 3!important">Vegetação e Flora</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="2" id="2"  href="#carouselExample" style= "order: 2!important">Biodiversidade</a>
                        <a class="nav-link link-material ms-3 my-1" id="1"  data-bs-target="#carouselExample" data-bs-slide-to="1" href="#carouselExample" style= "order: 1!important">Subdivisões da Mata Atlântica</a>
                        <a class="nav-link link-material" data-bs-slide-to="0" id="0" data-bs-target="#carouselExample" href="#carouselExample" style= "order: 0!important">Mata Atlântica</a>
                    </nav>
                </nav>
            </div>

            <div class="col conteudo-material">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" tabindex="0">
                    <div id="carouselExample" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <!-- CARROUSEL 1 -->
                            <div class="carousel-item active">
                                <h4>Mata Atlântica</h4>
                                <p> 
                                    O bioma é composto por várias formações vegetais e ecossistemas, que se destaca por sua grande biodiversidade, incluindo, por exemplo, várias espécies endêmicas (que ocorrem apenas nessa região).
                                </p>
                                <p>
                                    Esse bioma está presente em quase todos os estados brasileiros, seja de forma parcial, seja de forma integral. São 17 estados que têm em seu território áreas cobertas pela mata, espalhadas por mais de três mil municípios.
                                </p>
                                <p>
                                    A presença marcante da mata está no litoral brasileiro, em grande parte do Sudeste, do Sul e de alguns estados do Centro-Oeste e Nordeste. Ocupava 15% do território brasileiro, mas devido as ações humanas restam apenas 12,5%.
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/mata_atlantica/introducao.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Expansão do bioma mata atlântica nos estados brasileiros</figcaption>
                                    </figure>                                   
                                </div>
                            </div>

                            <!-- CARROUSEL 2 -->
                            <div class="carousel-item" style="height: 70vh;">
                                <h5>Subdivisões da Mata Atlântica</h5>
                                <p>
                                    Segundo a Apremavi, podemos dividir a Mata Atlântica em duas florestas: primária e secundária (possui três estágios).                                
                                </p>
                                <p>
                                    <ul>
                                        <li><strong>Floresta Primária: </strong>conhecida com mata virgem, por é uma floresta intocada pelos seres humanos ou em que a ação humana não desequilibrou a relação dos seres vivos. Nessa floresta, pode-se encontrar as árvores mais altas e grossas do bioma, além de orquídeas e cactos nas copas das árvores.</li>
                                        <li>
                                            <strong>Floresta Secundária: </strong>essa área é a que houve atividade humana, como agricultura e extrativismo vegetal. Depois das atividades, algumas áreas são abandonadas e a floresta mostra sua capacidade de regeneração biológica, que faz ressurgir espécies. Essa regeneração é chamada de:
                                        <ul>
                                            <li><strong>Estágio Inicial: </strong>pode durar até 10 anos, depende do grau de devastação do sol e da flora. As árvores não passam de 4 metros, prevalecendo samambaias no chão.</li>
                                            <li><strong>Estágio Médio: </strong>as samambaias diminuem e as árvores podem atingir até 12 metros de altura.</li>
                                            <li><strong>Estágio Avançado: </strong>após o estágio médio, a floresta pode demorar até 200 anos para atingir o patamar da floresta primária. Nesse estágio, as samambaias desaparecem e a biodiversidade aumenta gradativamente.</li>
                                        </ul>
                                        </li>
                                    </ul>
                                </p>
                            </div>

                            <!-- CARROUSEL 3 -->
                            <div class="carousel-item">
                                <h5>Biodiversidade</h5>
                                <p>
                                    O bioma é formado por formações florestais nativas e ecossistemas associados. Segundo o Ministério do Meio Ambiente, fazem da formação da Mata Atlântica:
                                    <ul>
                                        <li><strong>Floresta Ombrófila Densa: </strong>caracterizada pelas árvores de copas altas, formando coberturas vegetais fechadas. É mais comum no litoral brasileiro, do Rio Grande do Sul ao Ceará, com precipitações regulares durante o ano.</li>
                                        <li><strong>Floresta Ombrófila Mista ou Mata da Araucárias: </strong>é comum de áreas frias, como a região Sul do Brasil e os planaltos do Sudeste. Uma árvore típica dessa localidade é a Araucária.</li>
                                        <li><strong>Floresta Ombrófila Aberta: </strong>é comum em áreas mais secas e com altas temperaturas, sem a presença de árvores com copas altas fechadas. É encontrada em Minas Gerais, Espírito Santo e Alagoas.</li>
                                        <li><strong>Floresta Estacional Semidecidual: </strong>é também conhecida como floresta tropical subcaducifólia, algumas de suas árvores podem perder as folhas durante o outono e inverno.</li>
                                        <li><strong>Floresta Estacional Decidual: </strong>ocorre em locais com duas estações definidas, uma seca e outra úmida. Em geral, suas árvores perdem as folhas no inverno seco e frio.</li>
                                    </ul>
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/mata_atlantica/biodiversidade.jpg')}}" class="w-100" srcset="">
                                        <figcaption>A diversidade da floresta da Mata Atlântica. Foto: ICMBio</figcaption>
                                    </figure>                                 
                                </div>
                            </div>

                            <!-- CARROUSEL 4 -->
                            <div class="carousel-item">
                                <h5>Vegetação e Flora</h5>
                                <p>
                                    O bioma possui uma rica biodiversidade. Por conta dessa biodiversidade, não há estudos conclusivos da quantidade de espécies na região. Estima-se que haja na Mata Atlântica 20 mil espécies de árvores, o que significa 35% do total existente no Brasil.
                                </p>
                                <p>
                                    A Mata Atlântica é estratificada, com grandes árvores. Elas compõem o dossel da floresta e absorvem a maior parte dos raios solares. Toda matéria orgânica (folhas, frutos) é absorvida pelo solo da floresta, tornando-o fértil para as vegetações. Abaixo do dossel, crescem pequenas vegetações arbustivas nas sombras das árvores mais altas.
                                </p>
                                <p>
                                    Veja algumas árvores e frutas nativas da Mata Atlântica:
                                    <ul>
                                        <li>Araçá</li>
                                        <li>Cambuci</li>
                                        <li>Pau-Brasil</li>
                                        <li>Juçara</li>
                                        <li>Jatobá</li>
                                        <li>Gabiroba</li>
                                        <li>Palmiteiro</li>
                                    </ul>
                                </p>
                                <figure class="figure-material">
                                    <img src="{{asset('img/img_materiais/mata_atlantica/araca.jpg')}}" class="img-horizontal-material" srcset="">
                                    <figcaption>Fruto da Araça. Fonte: Apremavi</figcaption>
                                </figure>   
                                <figure class="figure-material">
                                    <img src="{{asset('img/img_materiais/mata_atlantica/cambuci.jpg')}}" class="img-horizontal-material" srcset="">
                                    <figcaption>Cambuci vira símbolo de preservação da Mata Atlântica — Foto: Globo Rural</figcaption>
                                </figure>                                   
                                <figure class="figure-material">
                                    <img src="{{asset('img/img_materiais/mata_atlantica/jatoba.jpg')}}" class="img-horizontal-material" srcset="">
                                    <figcaption>O fruto jatobá é quatro vezes mais rico em potássio do que a banana (Foto: Giselda Person / TG)</figcaption>
                                </figure>                                   
                                <figure class="figure-material">
                                    <img src="{{asset('img/img_materiais/mata_atlantica/gabiroba.jpg')}}" class="img-horizontal-material" srcset="">
                                    <figcaption>Gabiroba é uma espécie nativa, mas não endêmica de nosso país, que ocorre na Mata Atlântica e no Cerrado. Fonte: Apremavi</figcaption>
                                </figure>                                                                   
                            </div>

                            <!-- CARROUSEL 5 -->
                            <div class="carousel-item">
                                <h5>Fauna</h5>
                                <p>
                                    Assim como a variedade na flora, a fauna da Mata Atlântica é bem diversificada. Há espécies que podem ser encontradas também em outros biomas, como a onça-pintada e a anta. 
                                </p>
                                <p>
                                    Segundo dados do Ministério do Meio Ambiente, encontramos na Mata Atlântica cerca de: 
                                    <ul>
                                        <li>1000 espécies de aves;</li>
                                        <li>370 espécies de anfíbios;</li>
                                        <li>200 espécies de répteis;</li>
                                        <li>270 espécies de mamíferos;</li>
                                        <li>350 espécies de peixes.</li>
                                    </ul>
                                    Os números são aproximados devido à vasta distribuição de todos esses animais.
                                </p>
                                <p>
                                    Veja alguns dos animais mais comuns na Mata Atlântica:
                                    <ul>
                                        <li>Mico-leão-da-cara-preta</li>
                                        <li>Cachorro-do-mato</li>
                                        <li>Tie-sangue</li>
                                        <li>Perereca-verde</li>
                                        <li>Peixe dourado</li>
                                        <li>Pacu</li>
                                        <li>Traíra</li>
                                    </ul>
                                </p>
                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/mata_atlantica/tie-sangue.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Tiê-sangue. Fonte: passaro.org</figcaption>
                                    </figure>   
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/mata_atlantica/mico_leao_cara_preta.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Mico-leão-da-cara-preta. (Foto: Celso Margraf)</figcaption>
                                    </figure> 
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/mata_atlantica/traira.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Peixe Traíra. Fonte: caiaque.net</figcaption>
                                    </figure>        
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/mata_atlantica/cachorro_do_mato.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Cachorro-do-mato. (Foto: Rudimar Narciso Cipriani)</figcaption>
                                    </figure>                              
                                </div>
                            </div>

                            <!-- CARROUSEL 6 -->
                            <div class="carousel-item">
                                <h5>Água</h5>
                                <p>
                                    Na Mata Atlântica estão localizadas sete das nove grandes bacias hidrográficas do Brasil, alimentadas pelos rios São Francisco, Paraíba do Sul, Doce, Ribeira de Iguape e Paraná. As florestas asseguram a quantidade e qualidade da água potável que abastece mais de 110 milhões de brasileiros em aproximadamente 3,4 mil municípios inseridos no bioma.
                                </p>

                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/mata_atlantica/rio-paraiba-do-sul.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Rio Paraíba do Sul abastece mais de 14 milhões de pessoas. (Foto: Divulgação/CETESB)</figcaption>
                                    </figure>    
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/mata_atlantica/rio-sao-francisco.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Rio São Francisco, na divisa entre os estados da Bahia e de Alagoas. (Foto: Wikipédia)</figcaption>
                                    </figure>   
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/mata_atlantica/rio-parana.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Rio Paraná. (Foto: Reprodução/Flickr)</figcaption>
                                    </figure>                               
                                </div>
                            </div>

                            <!-- CARROUSEL 7 -->
                            <div class="carousel-item">
                                <h5>Clima</h5>
                                <p>
                                    O clima da Mata Atlântica é predominantemente tropical úmido, influenciado pelas massas de ar úmidas vindas do Oceano Atlântico.
                                </p>
                                <p>Apresenta também outros microclimas ao longo da mata, uma vez que as grandes árvores que compõem a vegetação geram sombra e umidade.</p>
                                <p>Além do clima tropical litorâneo úmido, presente na região nordestina, a Mata atlântica engloba também os climas tropical de altitude, na região sudeste, e o subtropical úmido, na região sul.</p>
                                <p>Suas temperaturas médias e umidade do ar são elevadas durante o ano todo e as chuvas são regulares e bem distribuídas.</p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/mata_atlantica/clima.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Fonte: rbma.org.br</figcaption>
                                    </figure>                                
                                </div>
                            </div>

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
                                <h5>Bromélia</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de uma Bromélia.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/bromelia.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Bromélia
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <h5>Capivara</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de uma Capivara.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/capivara.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Capivara
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
