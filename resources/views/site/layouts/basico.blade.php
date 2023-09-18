<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css')}}" >
    <title>Super Gestão - @yield('titulo')</title>
</head>
<body>
    @include('site.layouts._partials.topo')
    @yield('conteudo')
</body>
</html>