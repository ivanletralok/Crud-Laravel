@extends('layout');

@section('title', 'Fotos')


@section('seccion')
    <h1>Pagina de Fotos </h1>

    @foreach ($foto as $fotos)
        {{ $fotos }} <br>
    @endforeach
@endsection
