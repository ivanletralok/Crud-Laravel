@extends('layout')

@section('seccion')

<h2>Editar la nota : {{ $edit->id }}</h2>

@if (session('mensaje'))
    <div class= "alert alert-success" >{{ session('mensaje') }}</div>

@endif

<form action="{{ route('editar', $edit->id) }}" method="POST">
    @method('put')
    @csrf
    <div class="form-group">
        <input type="text" name="nombre" class="form-control" id="" value="{{ $edit->nombre }}" ><br>
        <input type="text" name="descripcion" class="form-control" id="" value="{{ $edit->descripcion }}" > <br>

        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>
@endsection
