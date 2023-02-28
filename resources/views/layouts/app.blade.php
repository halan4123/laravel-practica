<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practicando - @yield('titulo')</title>
</head>

<body>

    {{-- Estamos llamando a la navegacion que esta dentro de la carpeta views/partials/navigation --}}
    @include('partials.navigation')

    {{-- El yield es donde se colocara el contenido de la plantilla, para colocar el contenido es necesario usar el section de blade, primeramente es necesario el extends de la plantilla --}}
    @yield('contenido')

</body>

</html>
