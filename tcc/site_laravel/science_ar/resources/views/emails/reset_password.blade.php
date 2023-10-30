{{-- 
    "PRA QUE SERVE
    TANTO CÓDIGO
    SE A VIDA
    NÃO É PROGRAMADA
    E AS MELHORES COISAS
    NÃO TEM LÓGICA". 
    Algúem (algum ano)
--}}

{{-- @extends('layouts.main')
@section('title', 'Science Ar - Redefinição de Senha') --}}

{{-- Conteudo do site --}}
{{-- @section('content') --}}

    <body>
        <main style="padding: 30px">
            <div class="container-main">
            <p class="tituloCentralizado" style="">Redefinição de Senha -  Science AR</p>
                
                <div class="row">
                <div class="col">            
                    <div class="texto-quem-somos">
                        <p>
                            Clique no link abaixo para redefinir sua senha:
                        </p>

                        <a class="btnSobreNos" href="{{ $resetLink }}">Redefinir senha</a>
                        {{-- {{ $resetLink }} --}}
                    </div>
                </div>
                </div>
            </div>
        </main>
    <body>

<style>
    *{
        font-family: 'Poppins', sans-serif!important;
    }
    .tituloCentralizado{
        color: #000;
        font-family: 'Poppins', sans-serif;
        font-size: 50px;
        font-weight: 540;
        line-height: 120%;
        border-bottom: 0.4px solid #E6E6E6;
        padding-bottom: 5px;
        display: flex;
        text-align: center no-repeat;
    }

    .btnSobreNos{
        color: #fff;
        display: inline-flex;
        padding: 15px 40px;
        border-radius: 8px;
        background: #542066!important;
        box-shadow: 0 4px 0 #310749;
        margin-top: 30px;  
        font-family: Inter;
        font-size: 15px;
        font-style: normal;
        font-weight: 600;
        line-height: 130%; 
        text-decoration: none;
        cursor: pointer;
        transition: 0.1s;
        min-width: 200px;
        justify-content: center;
        transition: 0.1s!important;
        outline: 0!important;
    }

    .btnSobreNos:hover{
        background: #310749!important;
        box-shadow: 0 4px 0 #542066;
    }

    .btnSobreNos:focus, .btnSobreNos:active{
        background: #310749!important;
        box-shadow: 0 0px 0 #310749!important;
        transform: translateY(4px);
        outline: 0!important;
    }

    .texto-quem-somos{
        display: table-cell;
        text-align: justify;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
    }
</style>
{{-- @endsection --}}
