<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 36px;
        }

        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        #back-button {
            display: block;
            margin-top: 20px;
            font-size: 24px;
            text-align: center;
        }
    </style>
</head>
<body>
    @hasSection('conteudo')
        @yield('conteudo')
    @endif
    @auth
        <a id="back-button" href="{{route('dashboard')}}">&larr; Voltar à Página Inicial</a>  
    @else
        <a id="back-button" href="{{route('index')}}">&larr; Voltar à Página Inicial</a>
    @endauth
</body>
</html>
