
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <title>APOYO DOCS</title>
    </head>
    <body>
        <div class="teste" class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div>
                    <img height="305" src={{asset('/img/banner/blueLogo.jpg')}}>

                </div>

                <div class="teste" class="links">
                    <a href="https://apoyofinanceiro.com.br">Home</a>
                    <a href="http://bit.ly/apoyo-homeequity">Ficha Cadastral</a>
                    <a href="https://apoyofinanceiro.com.br/blog">Blog</a>
                </div>
            </div>
        </div>
    </body>