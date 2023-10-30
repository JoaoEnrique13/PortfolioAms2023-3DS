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
@section('title', 'Science Ar - Realidade Aumentada')

{{-- Conteudo do site --}}
@section('content')

  {{-- Menu --}}
  @include('layouts/menu')
    <div class="container-main" style="margin-bottom: 100px">
        <main>
            <p class="tituloCentralizado">Realidade Aumentada</p>
      
            <div>

                {{-- O que é: --}}
                <div class="row">
                    <div class="col">
                        <p class="titulo-ra">O que é?</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="linha-roxa"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="texto-oque col">
                        <p>
                            A Realidade Aumentada (RA) é uma tecnologia que enriquece nossa percepção do mundo real, permitindo a sobreposição de elementos virtuais por meio de dispositivos como smartphones ou óculos especiais. Com a RA, podemos acessar informações adicionais, visualizar objetos e personagens virtuais interativos, e até mesmo compreender conceitos complexos de forma mais clara e envolvente. Essa integração entre o real e o virtual torna o aprendizado e a exploração do conhecimento uma experiência mais imersiva e estimulante.
                        </p>
                    </div>

                    {{-- Imagem --}}
                    <div class="img-realidade col">
                        <img src="../img/realidade.jpg" class="img-rafiki-ra">
                    </div>
                </div>

                {{-- <div class="row">
                    <div class="col">
                        <p id="titulo-raEd">Realidade Aumentada na educação</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="linha-roxa"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="texto-raEd col">
                        <p>
                            RA na educação é uma tecnologia que mescla o mundo real com elementos virtuais, enriquecendo a experiência de aprendizado de forma interativa e prática. Ela permite que os alunos visualizem informações de maneira mais tangível e participem ativamente das atividades educacionais, tornando o processo de aprendizagem mais envolvente e eficaz. Além disso, a RA proporciona oportunidades para explorar conceitos complexos de forma mais clara e intuitiva, estimulando o interesse dos estudantes e promovendo um ambiente educacional inovador.
                        </p>
                            
                            <div>
                                <p class="texto-raEd">Para saber mais, acesse o artigo: link (Nome do artigo)</p>
                                <p class="texto-raEd">Leia o livro: nome do livro (link para a compra)</p>
                            </div> 
                            
                    </div>
                </div> --}}

                {{-- Como usar --}}
                <div class="row mt-4">
                    <div class="titulo-ra">
                        <p>Como usar?</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="linha-roxa"></div>
                    </div>
                </div>

                {{-- 1 --}}
                <div class="row row-como-usar-ra mt-4">
                    <div class="col col-circulo">
                        <div class="circulo" >
                            <p class="num">1</p> 
                        </div>
                    </div>
                    <div class="col" style="align-items: center; display: flex;">
                        <div class="como-usar">
                            <p>
                                Baixe o aplicativo "Science AR" em seu dispositivo móvel. <a style="font-weight: bold" target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">Aqui</a>
                            </p>
                        </div>
                        
                    </div>
                </div>

                {{-- 2 --}}
                <div class="row row-como-usar-ra">
                    <div class="col col-circulo">
                        <div class="circulo">
                            <p class="num">2</p>
                        </div>
                    </div>
                    
                    <div class="col" style="align-items: center; display: flex;">
                        <div class="como-usar">
                            <p>
                                Acesse o site ou material educativo que disponibilize o QR code para RA.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 3 --}}
                <div class="row row-como-usar-ra">
                    <div class="col col-circulo">
                        <div class="circulo">
                            <p class="num">3</p>
                        </div>
                    </div>
                    
                    <div class="col" style="align-items: center; display: flex;">
                        <div class="como-usar">
                            <p>Abra o aplicativo "Science AR" e aponte a câmera do seu dispositivo para o QR code.</p>
                        </div>
                    </div>
                </div>

                {{-- 4 --}}
                <div class="row row-como-usar-ra">
                    <div class="col col-circulo">
                        <div class="circulo">
                            <p class="num">4</p>
                        </div>
                    </div>
                    
                    <div class="col" style="align-items: center; display: flex;">
                        <div class="como-usar">
                            <p>Aguarde o carregamento da realidade aumentada associada ao QR code.</p>
                        </div>
                    </div>
                </div>

                {{-- 5 --}}
                <div class="row row-como-usar-ra">
                    <div class="col col-circulo">
                        <div class="circulo">
                            <p class="num">5</p>
                        </div>
                    </div>
                    
                    <div class="col" style="align-items: center; display: flex;">
                        <div class="como-usar">
                            <p>Explore e interaja com os elementos virtuais sobrepostos ao mundo real para obter informações adicionais e enriquecer a sua experiência de aprendizado.</p>
                        </div>
                    </div>          
                </div>
            </div>
        </main>
    </div>
    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection
