<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Pegando as variáveis de ambiente --}}
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Laravel - CRUD</h1>
        </header>
        <nav>
            <ul>
                {{-- Links para o cadastro --}}
                <li><a href="/veiculos">Início</a></li>
                <li><a href="/veiculos/create">Cadastro de Veículos</a></li>
            </ul>
        </nav>
        <div class="content">
            {{-- o conteúdo de cada view específica será injetado aqui, onde consta @section! --}}
            @yield('content')
        </div>
        <footer>
            <div>
                <p>Aprendendo Laravel Framework</p>
                <p><a href="http://www.laravel.com.br" target="_blank">Laravel Site</a></p>
            </div>
        </footer>
    </div>
</body>
</html>