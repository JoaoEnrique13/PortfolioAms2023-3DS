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
@section('title', 'Science Ar - Combustíveis e Máquinas Térmicas')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <main class="main-material">    
        <p class="tituloCentralizado title-material">Combustíveis e Máquinas Térmicas</p>
        <div class="row row-nav-material">
            <div class="col-2 col-nav-material">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column" style="position: sticky!important; top: 20px">
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="6" id="6"  href="#carouselExample" style= "order: 6!important">Usina Nuclear</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="5" id="5"  href="#carouselExample" style= "order: 5!important">Usina Fotovoltaica</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="4" id="4"  href="#carouselExample" style= "order: 4!important">Aerogerador</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="3" id="3"  href="#carouselExample" style= "order: 3!important">QR Code</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="2" id="2"  href="#carouselExample" style= "order: 2!important">Combustíveis</a>
                        <a class="nav-link link-material ms-3 my-1" id="1"  data-bs-target="#carouselExample" data-bs-slide-to="1" href="#carouselExample" style= "order: 1!important">Exemplos de Máquinas Térmicas</a>
                        <a class="nav-link link-material" data-bs-slide-to="0" id="0" data-bs-target="#carouselExample" href="#carouselExample" style= "order: 0!important">Máquinas Térmicas</a>
                    </nav>
                </nav>
            </div>

            <div class="col conteudo-material">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" tabindex="0">
                    <div id="carouselExample" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <!-- CARROUSEL 1 -->
                            <div class="carousel-item active">
                                <h5>Máquinas Térmicas</h5>
                                <p> 
                                    A importância das máquinas térmicas é incontestável para o desenvolvimento da nossa sociedade atual, sendo usada em motores de combustão interna para inúmeros 
                                    processos tecnológicos. Essas máquinas são capazes de converter parcialmente o calor proveniente de uma fonte térmica em energia mecânica, cinética ou potencial. 
                                </p>
                                <p>
                                    De acordo com a primeira lei da termodinâmica, as máquinas precisam receber uma certa quantidade de calor para funcionar. No entanto, apenas uma pequena fração
                                    dessa quantidade de calor, é uma forma de energia que pode ser convertida em trabalho útil. 
                                </p>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/combustiveis_maquinas/trabalho.jpg')}}" class="img-temp-material" srcset="" style="width: 40%;">
                                </div>
                                <br>
                                <p>
                                    A porção de energia que uma máquina térmica foi capaz de converter em energia mecânica é chamada de <strong>Trabalho</strong>. A quantidade de energia pode ser 
                                    calculada diretamente pela diferença entre a quantidade de calor que a máquina absorve de uma fonte quente pela quantidade de calor que a máquina dissipa para o
                                    meio externo, que comumente é chamado de fonte fria.
                                </p>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/combustiveis_maquinas/formula.jpg')}}" class="img-temp-material" srcset="">
                                </div>
                                <br>
                                <p>
                                    Todas as máquinas térmicas operam de acordo com um ciclo termodinâmico, isto é, sequências de estados termodinâmicos que se repetem. Esses ciclos apresentam 
                                    diferentes estados de volume, pressão e temperatura, que são geralmente representados por gráficos de pressão em função do volume. Os ciclos termodinâmicos 
                                    são projetados em busca da maior eficiência energética, ou seja, busca-se sempre a produção de motores capazes de extrair uma grande quantidade de trabalho.
                                </p>
                                <p>
                                    Ao fim do processo, a substância de trabalho sempre volta ao seu estado inicial.
                                </p>
                            </div>

                                                       
                            <!-- CARROUSEL 5 -->
                            <div class="carousel-item">
                                <h5>Exemplos de Máquinas Térmicas</h5>
                                <p>
                                    <strong>Máquinas a vapor –</strong> As máquinas a vapor são dispositivos mecânicos que utilizam a energia térmica do vapor de água para gerar trabalho mecânico. 
                                    Funcionam através da geração de vapor em uma caldeira, que é produzido pela combustão de combustíveis como carvão, madeira ou petróleo. O vapor é direcionado para 
                                    um cilindro, onde empurra um pistão, criando movimento mecânico. Após realizar o trabalho, o vapor é resfriado e condensado, retornando à caldeira para reiniciar o 
                                    ciclo.
                                </p>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/combustiveis_maquinas/maquina_vapor.jpg')}}" class="img-temp-material" srcset="">
                                </div>
                                <br>
                                <p>
                                    <strong>Usinas termoelétricas –</strong> Usinas termoelétricas são instalações industriais que geram eletricidade a partir da queima de combustíveis fósseis ou fissão
                                    nuclear. O calor gerado é usado para produzir vapor que movimenta turbinas, gerando eletricidade por meio de geradores elétricos. Embora sejam fontes importantes de 
                                    energia, suas emissões de gases de efeito estufa e poluentes são preocupações ambientais, levando ao impulso por fontes de energia mais limpas e renováveis.
                                </p>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/combustiveis_maquinas/usina.jpg')}}" class="img-temp-material" srcset="">
                                </div>
                                <br>
                                <p>
                                    <strong>Motores de combustão interna -</strong> Motores de combustão interna convertem energia química em energia mecânica pela queima de combustíveis dentro da câmara 
                                    de combustão. A queima gera pressão, movendo um pistão e transformando o movimento em trabalho mecânico. Amplamente utilizados em veículos e indústrias, são eficientes,
                                    mas emitem poluentes. Apesar do avanço de tecnologias mais limpas, continuam sendo fundamentais em transportes e indústrias ao redor do mundo.
                                </p>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/combustiveis_maquinas/motor.jpg')}}" class="img-temp-material" srcset="">
                                </div>
                            </div>


                            <!-- CARROUSEL 6 -->
                            <div class="carousel-item">
                                <h5>O que são</h5>
                                <p>
                                    Combustíveis são substâncias ou materiais que possuem energia armazenada em sua composição e podem ser queimados ou oxidados para liberar calor e produzir energia 
                                    utilizável. Eles são usados para alimentar motores, gerar calor, eletricidade e fornecer energia em diversas aplicações. São substâncias capazes de liberar alta 
                                    quantidade de energia, sob a forma de calor, ao reagir com um material comburente, geralmente o gás oxigênio, em uma reação de combustão. Boa parte dos combustíveis 
                                    é constituída por átomos de carbono e hidrogênio, sendo o gás carbônico (CO2) e a água os produtos da combustão.
                                </p>
                                <p>
                                    A energia liberada pela combustão de um material combustível deriva de suas ligações químicas. Por isso, a combustão é um processo de conversão da energia química 
                                    em energia térmica.                                
                                </p>
                                <p>
                                    Os combustíveis são de extrema importância na sociedade, pois a energia térmica liberada na sua combustão é utilizada na geração de trabalho mecânico, como observamos 
                                    nos motores à combustão dos automóveis. O calor gerado na combustão também é aproveitado em processos de aquecimento, cozimento e em procedimentos industriais.
                                </p>
                                
                                <h5>Tipos de Combustíveis</h5>
                                <p>
                                    Os combustíveis podem ser classificados em dois tipos, eles são:
                                </p>
                                <p>
                                    <strong>Combustíveis renováveis (não fosseis) -</strong> Combustíveis renováveis são fontes de energia sustentáveis que podem ser regeneradas naturalmente em um curto 
                                    período. Eles não se esgotam como os combustíveis não-renováveis. Alguns exemplos de combustíveis renováveis incluem biomassa, biocombustíveis (como etanol e biodiesel), 
                                    energia solar, eólica, hidrelétrica e geotérmica. Esses combustíveis têm vantagens significativas em relação aos não-renováveis, pois sua queima geralmente produz menos 
                                    emissões de gases de efeito estufa, ajudando a combater as mudanças climáticas. Além disso, contribuem para a diversificação da matriz energética e a redução da dependência 
                                    de fontes de energia não-renováveis e importadas. A utilização crescente de combustíveis renováveis é considerada crucial para alcançar metas ambientais e promover a 
                                    sustentabilidade a longo prazo.                                
                                </p>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/combustiveis_maquinas/energia_renovavel.jpg')}}" class="img-temp-material" srcset="">
                                </div>
                                <br>
                                <p>
                                    <strong>Combustíveis não-renováveis (fosseis) -</strong> Combustíveis não-renováveis, como petróleo e carvão, são essenciais para a sociedade, mas sua queima libera gases 
                                    de efeito estufa e esgota recursos. Ao queimar combustíveis fósseis, como o petróleo e o carvão, grandes quantidades de dióxido de carbono (CO2) e outros gases de efeito 
                                    estufa são liberados na atmosfera. Isso contribui para o aumento das temperaturas globais, o aquecimento global e as mudanças climáticas. Além do impacto ambiental, os 
                                    combustíveis não-renováveis também apresentam o desafio da finitude dos recursos. Eles são finitos, ou seja, não podem ser renovados em um curto período. À medida que a 
                                    demanda por esses recursos continua a crescer, suas reservas diminuem e se tornam cada vez mais difíceis e caras de serem extraídas.                                
                                </p>
                                <br>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/combustiveis_maquinas/energia_naorenovavel.jpg')}}" class="img-temp-material" srcset="">
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
                                <h5>Aerogerador</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de um Aerogerador.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/aerogerador.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Aerogerador
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <!-- CARROUSEL  -->
                            <div class="carousel-item">
                                <h5>Usina Fotovoltaica</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de uma Usina Fotovoltaica.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/fotovoltaica.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Usina Fotovoltaica
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <!-- CARROUSEL  -->
                            <div class="carousel-item">
                                <h5>Usina Nuclear</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de uma Usina Nuclear.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/usina_nuclear.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Usina Nuclear
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
