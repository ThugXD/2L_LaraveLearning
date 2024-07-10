<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('Aprendendo Laravel')</title>

        <link rel="stylesheet" href="/css/Style.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <script src="/js/script.js"></script>
        
    </head>
    <body>
        
        <!-- Directivas do Blade-->
        
        @yield('content')
    <!--Criar LAyouts do Blade Isso é Fottor-->
    <footer>
        <p>ThugXD events &copy; 2024</p>
    </footer>
    </body>
</html>
