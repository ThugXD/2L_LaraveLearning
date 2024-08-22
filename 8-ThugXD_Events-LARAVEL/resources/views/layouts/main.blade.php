<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('Aprendendo Laravel')</title>

        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/fontawesome/css/all.css">
        <script src="/js/script.js"></script>
    	
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collpse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" alt="Logo da empresa HDC">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar Eventos</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus Eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <a href="/logout" class="nav-link" onclick="event.preventDefault();
                                        this.closest('form').submit();">Sair</a>
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
        
        <!-- Directivas do Blade-->
        
    <main>
        <div class="cotaniner-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg"> {{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>    
    <!--Criar Layouts do Blade Isso é Fottor-->
    <footer>
        <p>ThugXD events &copy; 2024</p>
    </footer>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>
