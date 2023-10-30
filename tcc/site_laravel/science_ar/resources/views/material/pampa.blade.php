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
@section('title', 'Science Ar - Bioma Pampa')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <main class="main-material">    

        <p class="tituloCentralizado title-material">Bioma Pampa</p>

        <div class="row row-nav-material">
            <div class="col-2 col-nav-material">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column" style="position: sticky!important; top: 20px">
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="8" id="8"  href="#carouselExample" style= "order: 8!important">Furão</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="7" id="7"  href="#carouselExample" style= "order: 7!important">Trigo</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="6" id="6"  href="#carouselExample" style= "order: 6!important">QR Code</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="5" id="5"  href="#carouselExample" style= "order: 5!important">Fauna</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="4" id="4"  href="#carouselExample" style= "order: 4!important">Vegetação</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="3" id="3"  href="#carouselExample" style= "order: 3!important">Relevo</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="2" id="2"  href="#carouselExample" style= "order: 2!important">Hidrografia</a>
                        <a class="nav-link link-material ms-3 my-1" id="1"  data-bs-target="#carouselExample" data-bs-slide-to="1" href="#carouselExample" style= "order: 1!important">Clima</a>
                        <a class="nav-link link-material" data-bs-slide-to="0" id="0" data-bs-target="#carouselExample" href="#carouselExample" style= "order: 0!important">Pampa</a>
                    </nav>
                </nav>
            </div>

            <div class="col conteudo-material">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" tabindex="0">
                    <div id="carouselExample" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <!-- CARROUSEL 1 -->
                            <div class="carousel-item active">
                                <h4>Pampa</h4>
                                <p> 
                                    O Pampa, também chamado por Campanha Gaúcha, Campos Sulinos ou Campos do Sul, fica localizado no centro da América do Sul, ocupando o estado do Rio Grande do Sul em 63%, pegando apenas 2% do território brasileiro. E ocupa parte do Uruguai e Argentina.
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/pampa/introducao.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Fonte: Brasil Escola.</figcaption>
                                    </figure>                                   
                                </div>
                            </div>

                            <!-- CARROUSEL 2 -->
                            <div class="carousel-item" style="height: 70vh;">
                                <h5>Clima</h5>
                                <p>
                                    Seu clima é o subtropical, sendo a temperatura média entre 18º C e 20º C. Uma característica é as temperaturas amenas na maior parte do ano e as frequentes chuvas.
                                </p>
                                <p>
                                    O Pampa apresenta um clima bastante específico, com forte influência da umidade, que interfere nos demais indicadores climáticos locais. Os verões são muito quentes
                                    e os invernos são muito frios devido ao avanço da massa polar atlântica. No inverno, pode ocorrer geadas e também pode nevar em algumas partes.
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/materiais/temperatura/temperatura.jpg')}}" class="w-100" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 3 -->
                            <div class="carousel-item">
                                <h5>Hidrografia</h5>
                                <p>
                                    O Pampa tem uma rede hidrográfica considerável, formada por rios pequenos e médios, contendo uma ampla disponibilidade de água. abrange uma área constituída por duas bacias hidrográficas: a bacia hidrográfica Costeira do Sul e a bacia hidrográfica do Rio da Prata. Os principais rios são 
                                    Rio Uruguai, Rio Santa Maria, Rio da Prata, Rio Jacuí, Rio Ibicuí e Rio Vacacaí. 
                                </p>
                                <p>
                                    A hidrografia desse bioma brasileiro apresenta elevado potencial hidrelétrico e é extremamente navegável.
                                </p>

                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pampa/rio_uruguai.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Rio Uruguai. Fonte: noroesteonline.com</figcaption>
                                    </figure>  
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pampa/rio_santa_maria.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Rio Santa Maria em Rosário do Sul - Foto: CBH Santa Maria. Encarte do Plano Santa Maria</figcaption>
                                    </figure>                                         
                                </div>
                            </div>

                            <!-- CARROUSEL 4 -->
                            <div class="carousel-item">
                                <h5>Relevo</h5>
                                <p>
                                    É do tipo suave ondulado, ou seja, é formado por regiões de planícies com presenças de colinas que caracterizam, ao menos, quatro domínios geomorfológicos distintos do relevo sul-rio-grandense. São eles:
                                    <ul>
                                        <li>planalto da campanha;</li>
                                        <li>depressão central;</li>
                                        <li>planalto sul-rio-grandense;</li>
                                        <li>planície costeira.</li>
                                    </ul>                                
                                </p>
                                <p>
                                    Entre esses domínios geomorfológicos, se destaca relevo de planícies, feito de grandes áreas de pastagens que se desenvolvem rebanhos de ovelhas.
                                </p>
                                <p>
                                    Sendo assim, a <strong>principal atividade econômica</strong> do local é a <strong>pecuária extensiva com destaque para a criação de bois e ovelhas.</strong> Já as principais produções agrícolas da região são: <strong>soja, arroz, milho, trigo e uva.</strong>
                                </p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/img_materiais/pampa/relevo.jpg')}}" class="w-100" srcset="">
                                        <figcaption>Fonte: Gestão Educacional.</figcaption>
                                    </figure>                                   
                                </div>
                            </div>

                            <!-- CARROUSEL 5 -->
                            <div class="carousel-item">
                                <h5>Vegetação</h5>
                                <p>
                                    A vegetação é <strong>predominantemente campestre, formada por plantas herbáceas (características explicadas no Bioma Cerrado)</strong>, inclui gramíneas e espécies arbustivas.
                                </p>
                                <p>
                                    Em algumas áreas, dá para identificar a presença de matas ciliares, algumas árvores decíduas e formações pioneiras, embora em menor quantidade. 
                                </p>
                                <p>
                                    De acordo com o IBGE, a flora apresenta <strong>1623 espécies diferentes de plantas</strong>, incluindo as endêmicas, como o nhavandaí e o algarrobo. 
                                </p>
                                <p>
                                    Assim, podemos encontrar no Pampa as seguintes plantas:
                                    <ul>
                                        <li>capim-forquilha</li>
                                        <li>amendoim-nativo</li>
                                        <li>flechilhas</li>
                                        <li>grama-tapete</li>
                                        <li>angico-vermelho</li>
                                        <li>cabelos-de-porco</li>
                                    </ul>
                                </p>

                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pampa/algaborro.jpg')}}" class="img-horizontal-material">
                                        <figcaption>Algaborro (espécie endêmica). Rosseto, V.; Sampaio, T. M.; Oliveira, R.; Grala, K. O algarrobo.</figcaption>
                                    </figure>  
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pampa/amendoim_nativo.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Amendoim nativo</figcaption>
                                    </figure>       
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pampa/flechilhas.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Flechilhas. Foto: Andrés González</figcaption>
                                    </figure>   
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pampa/capim_forquilhas.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Capim-forquilhas. Fonte: projetojardinando.com</figcaption>
                                    </figure>                                     
                                </div>
                            </div>

                            <!-- CARROUSEL 6 -->
                            <div class="carousel-item">
                                <h5>Fauna</h5>
                                <p>
                                    Também é muito diversa, tendo muitas espécies de aves, répteis, anfíbios e mamíferos.
                                </p>
                                <p>
                                    Na fauna, também possui espécies endêmicas como: sapinho-de-barriga-vermelha e o beija-flor-de-barba-azul.
                                </p>
                                <p>
                                    Além desses, existem também:

                                    <ul>
                                        <li>furão</li>
                                        <li>quero-quero</li>
                                        <li>pica-pau-do-campo</li>
                                        <li>veado-campeiro</li>
                                        <li>sabiá-do-campo</li>
                                    </ul>
                                </p>
                                <p>Vamos ver abaixo alguns animais presentes no bioma.</p>
                                <div class="img-center">
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pampa/sabia_do_campo.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Sabiá-do-campo possui o peito e o ventre esbranquiçados — Foto: Rudimar Narciso Cipriani</figcaption>
                                    </figure>  
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pampa/beija_flor.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Beija-flor-da-barba-azul (espécie endêmica). Fonte: passarosexoticos.net</figcaption>
                                    </figure>       
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pampa/sapo_barriga_vermelha.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Sapinho-de-barriga-vermelha (espécie endêmica).</figcaption>
                                    </figure>   
                                    <figure class="figure-material">
                                        <img src="{{asset('img/img_materiais/pampa/quero-quero.jpg')}}" class="img-horizontal-material" srcset="">
                                        <figcaption>Quero-quero. Foto Luiz Carlos Vaz</figcaption>
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
                                <h5>Trigo</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de um Trigo.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/trigo.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Trigo
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <h5>Furão</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de um Furão.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/furao.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Furão
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
