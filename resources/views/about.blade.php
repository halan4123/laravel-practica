{{-- Es necesario el extends para usar la plantilla. --}}
@extends('layouts.app')

{{-- Esto es correcto. --}}
{{-- @section('titulo')
    About
@endsection --}}
{{-- Pero cuando solo es texto se puede hacer lo siguiente donde el primer parametro sea el yield a buscar y el segundo el parametro. --}}
@section('titulo', 'About')

{{-- El section se usa para insertar el contenido en el yield con el mismo nombre del section --}}
@section('contenido')
    <h1>About</h1>
@endsection
