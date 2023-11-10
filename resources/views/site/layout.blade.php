<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resource/css/main.css'])
</head>
<body>
    @component('site.navbar')
    @endcomponent
    @yield('body')
    @hasSection('javascript')
        @yield('javascript')
    @endif
</body>
</html>