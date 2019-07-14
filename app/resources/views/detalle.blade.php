@extends('layout')

@section('seccion')
    <h1> Detalles De Notas</h1>

    <div class="container">
        <h4> Id: {{  $dato->id }}</h4>
        <h4> Nombre: {{  $dato->nombre }}</h4>
        <h4> Descripcion: {{  $dato->descripcion }}</h4>

    </div>
@endsection
