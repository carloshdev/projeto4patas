<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Projeto 4 Patas</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}?ver=2.0" rel="stylesheet">
    @laravelPWA
    <!--link rel="manifest" href="/manifest.json"-->
    <!--link rel="manifest" href="{{ asset('manifest.json') }}"-->
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body class="{{(isset($bodyClass) ? $bodyClass : '')}}">
    <div id="app">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Projeto 4 patas
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('doacao') }}">{{ __('Doação') }}</a>
                            </li>
                            <!-- .......................SERVIÇOS....................... -->
                            <!-- .......................Listar -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('listar-servicos') }}">{{ __('Listar Serviços') }}</a>
                            </li>
                            <!-- .......................Cadastrar -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cadastro-servicos') }}">{{ __('Cadastrar Serviços') }}</a>
                            </li>

                            <!-- .......................ANIMAIS....................... -->
                            <!-- .......................Listar -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('listar-animais') }}">{{ __('Listar Animais') }}</a>
                            </li>
                            <!-- .......................Cadastro -->
                           
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('cadastro-animais') }}">{{ __('Cadastrar Animais') }}</a>
                                        </li>            
                              
                            
                            <!-- .......................LOCALIZAÇÃO....................... -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('local-mapa') }}">{{ __('Localização') }}</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        <?php /* 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Serviços') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">                                
                                    <a class="nav-link" href="{{ route('listar-servicos') }}">{{ __('Listar Serviços') }}</a>
                                    <a class="nav-link" href="{{ route('cadastro-servicos') }}">{{ __('Cadastrar Serviços') }}</a>
                                </div>
                            </li>
                        */?>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
