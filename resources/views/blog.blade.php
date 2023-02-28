{{-- Es necesario el extends para usar la plantilla. --}}
@extends('layouts.app')

{{-- Esto es correcto. --}}
{{-- @section('titulo')
    Blog
@endsection --}}
{{-- Pero cuando solo es texto se puede hacer lo siguiente donde el primer parametro sea el yield a buscar y el segundo el parametro. --}}
@section('titulo', 'Blog')

{{-- El section se usa para insertar el contenido en el yield con el mismo nombre del section --}}
@section('contenido')
    <h1>Blog</h1>

    {{--  Se utiliza para observar los datos obtenidos.
    @dump($entradas); --}}

    @foreach ($entradas as $entrada)

        {{-- Esta forma es como se hizo con arreglos sin base de datos --}}
        {{-- <h2>{{ $entrada['titulo'] }}</h2> --}}

         {{-- Esta forma es como se hizo con base de datos, lo que obtenemos es un objeto por eso accedemos de esta forma --}}
        <h2>{{ $entrada->titulo }}</h2>
        
    @endforeach


@endsection
