<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- FONT DO GOOGLE -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

         
        <!-- CSS BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <!-- CSS DA APLICAÇÃO -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>


    </head>
    <body class="antialiased">
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-ligth">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/logo-tiban.jpg" alt="SATI">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar solicitaçôes</a>
                </li>
                @auth
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Minhas Solicitações</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                          <a href="/logout" 
                            class="nav-link" 
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Sair
                          </a>
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar</a>
                </li>
                @endguest
            </ul>
        </div>
        </nav>
    </header>
    <main>
      
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>

    </main>
        <footer>
            <p>SATI TIBAN &copy; 2022</p>
        </footer>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>