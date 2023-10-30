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
@section('title', 'Science Ar - Calor e Sensação Térmica')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <main class="main-material">    
        <p class="tituloCentralizado title-material">Calor e Sensação Térmica</p>
        <div class="row row-nav-material">
            <div class="col-2 col-nav-material">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column" style="position: sticky!important; top: 20px">
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="7" id="7"  href="#carouselExample" style= "order: 7!important">Raios</a>
                        <a class="nav-link link-material ms-5 my-1" data-bs-slide-to="6" id="6"  href="#carouselExample" style= "order: 6!important">Fogueira</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="5" id="5"  href="#carouselExample" style= "order: 5!important">QR Code</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="4" id="4"  href="#carouselExample" style= "order: 4!important">Sensação Térmica</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="3" id="3"  href="#carouselExample" style= "order: 3!important">Tipos de Calor</a>
                        <a class="nav-link link-material ms-3 my-1" data-bs-slide-to="2" id="2"  href="#carouselExample" style= "order: 2!important">Transmissão de Calor</a>
                        <a class="nav-link link-material ms-3 my-1" id="1"  data-bs-target="#carouselExample" data-bs-slide-to="1" href="#carouselExample" style= "order: 1!important">Fonte de Calor</a>
                        <a class="nav-link link-material" data-bs-slide-to="0" id="0" data-bs-target="#carouselExample" href="#carouselExample" style= "order: 0!important">O que é?</a>
                    </nav>
                </nav>
            </div>

            <div class="col conteudo-material">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" class="scrollspy-example-2" tabindex="0">
                    <div id="carouselExample" class="carousel carousel-dark slide">
                        <div class="carousel-inner">
                            <!-- CARROUSEL 1 -->
                            <div class="carousel-item active">
                                <h4>O que é?</h4>
                                <p> 
                                    O calor é a energia térmica em trânsito motivada pela diferença de temperatura de dois corpos. O calor é a energia térmica que passa de um corpo maior para um com menor 
                                    temperatura, quando não há diferença de temperatura entre os corpos, o calor torna-se inexistente.
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/calor_sensacao/calor.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <p>
                                    Quando as temperaturas dos corpos se igualarem, dizemos que o equilíbrio térmico foi atingido e nesse momento, o calor deixa de existir
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/calor_sensacao/formula.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 2 -->
                            <div class="carousel-item" style="height: 70vh;">
                                <p>
                                <strong>Fonte de calor: </strong>Todo elemento capaz de produzir o aumento de temperatura de outro corpo é uma fonte de calor. Como exemplo, podemos citar a chama de um fogão, forno, 
                                lareira.
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/calor_sensacao/fonte_calor.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 3 -->
                            <div class="carousel-item" style="height: 70vh;">
                                <p>
                                <strong>Transmissão de Calor: </strong>Existem três maneiras possíveis para que ocorra a transmissão de calor, elas são:
                                </p>

                                <ol start="1">
                                    <li><strong>Condução: </strong>Quando o calor passa de molécula a molécula do material;</li>
                                    <li><strong>Convecção: </strong>Transferência de calor em um fluído que ocorre em virtude de um deslocamento de massa do próprio fluido;</li>
                                    <li><strong>Radiação: </strong>Transmissão de calor por meio de ondas eletromagnéticas.</li>                           
                                </ol>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/calor_sensacao/transmissao_calor.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                            </div>

                            <!-- CARROUSEL 4 -->
                            <div class="carousel-item" style="height: 70vh;">
                                <p>
                                    <strong>Tipos de calor - Existem dois tipos de calor, eles são: </strong>
                                </p>
                                    <ul>
                                        <ol><strong>Calor sensível: </strong>Quando se fornece uma quantidade de calor capaz apenas de gerar variação em um corpo, mas seu estado físico permanece inalterado, essa 
                                        quantidade de energia é chamada de calor sensível.</ol>
                                        <ol><strong>Calor latente: </strong>Quando a quantidade de calor transmitida gera mudança de estado físico, ela e denominada de calor latente. Como exemplo a vaporização da 
                                        água, mudando o estado da água de líquido para gasoso, através do calor.</ol>
                                    </ul>
                            </div>
                            
                            <!-- CARROUSEL 5 -->
                            <div class="carousel-item">
                                <h5>Sensação Térmica</h5>
                                <p>
                                    Sensação térmica é a maneira como os nossos sensores de temperatura compreendem a temperatura do ar, se diferenciando de pessoa a pessoa. Ela é alterada por fatores como a 
                                    velocidade do vento, temperatura real do ar e a umidade relativa do ar, já que eles interferem na transferência de calor entre os corpos e o meio. A <strong>tbA</strong> 
                                    temperatura é diretamente proporcional à quantidade de energia térmica num sistema. Quanto mais energia térmica se junta a um sistema, mais a sua temperatura aumenta. Ao contrário,
                                    uma perda de calor provoca um abaixamento da temperatura do sistema.
                                </p>
                                <p>
                                    Sensação térmica ou temperatura aparente é a maneira como nosso corpo percebe a temperatura do ar. A sensação térmica, na maioria das vezes, pode divergir da temperatura real 
                                    do ambiente. Quando saímos de uma piscina quente, temos a impressão de que a temperatura do ambiente está muito mais fria do que anteriormente. Em geral, o cálculo da sensação 
                                    térmica depende apenas da velocidade do vento e da temperatura do ambiente. Os fatores que influenciam a sensação térmica são a velocidade do vento, a temperatura real do ar 
                                    e a umidade relativa do ar.
                                </p>
                                <div class="img-center">
                                    <img src="{{asset('img/img_materiais/calor_sensacao/formula_sensacao.jpg')}}" class="img-horizontal-material" srcset="">
                                </div>
                                <br>
                                <p>
                                    As sensações relacionadas ao frio ou ao calor são ditas sensações térmicas. Após o banho, seja em um chuveiro ou em uma piscina, às vezes sentimos um pouco de frio. Sentimos mais 
                                    frio ainda quando está ventando, pois o vento intensifica a evaporação da água, que provoca o abaixamento da temperatura da água.      
                                </p>
                                <p>
                                    Ao se falar em sensação térmica, não se pode omitir a palavra percepção individual. Por definição física, a sensação térmica trata-se de uma percepção do ar, a qual pode diferir 
                                    muito da temperatura real, pois fatores como a umidade relativa do ar, densidade atmosférica e a velocidade de propagação do vento alteram a transferência de energia (calor) entre 
                                    o meio ambiente e o corpo. De modo mais restrito, as sensações térmicas são aquelas que podemos identificar através do corpo, e estão relacionadas ao frio a ao calor.                 
                                </p>
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
                                <h5>Fogueira</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de uma Fogueira.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/fogueira.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Fogueira
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <!-- CARROUSEL  -->
                            <div class="carousel-item">
                                <h5>Raios</h5>
                                <p>Escaneie o QRCode com o aplicativo <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Science AR</a> e visualize um modelo tridimensional de um Raio.</a></p>
                                <div class="img-center">
                                    <figure>
                                        <img src="{{asset('img/qr_code/raios.jpg')}}" class="img-qrcode">
                                        <figcaption style="margin-top: -30px">
                                            Raios
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
