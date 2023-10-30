<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        /* Estilo para ocultar a página inicialmente */
        body{
            display: none!important;
            transition:  .5s ease-in!important;
        }
        /* Estilo para exibir a página após o carregamento completo */
        body.loaded {
            display: block!important;
        }

        .tela-carregamento{
            display: flex;
            justify-content: center;
            place-items: center;
            width: 100%;
            min-height: 100vh;
            max-height: 100vh;
        }


    </style>
        <script>
        // Função para adicionar a classe CSS quando a página estiver carregada
        window.addEventListener('load', function() {
          document.querySelector('body').classList.add('loaded');
        });
      </script>
    <link rel="shortcut icon" href="{{ asset('img/astronaut.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{asset('bootstrap-5.3.0-dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="{{asset('bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>    
    <link href="{{ asset('bootstrap-5.3.0-dist\css\bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
{{-- 
<div class="tela-carregamento">
    <img src="{{asset('img/astronaut.gif')}}" alt="" srcset="">
</div> --}}

@yield('content')
<script>
    console.log('%cScience AR', 'font-size: 20px; color: red;');
    console.log('%cTCC 2023', 'font-size: 20px; color: red;');
</script>

   
</html>