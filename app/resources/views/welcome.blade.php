@extends('layout') @section('title','Welcome')
@section('seccion')

@if (session('mensaje'))
    <div class= "alert alert-success" >{{ session('mensaje') }}</div>

@endif

<form action="{{ route('crear') }}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" name="nombre" class="form-control" id="" placeholder="Nombre"><br>
        <input type="text" name="descripcion" class="form-control" id="" placeholder="Descripcion"> <br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<div class="container my-4">
    <h1 class="display-4">Notas</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($nota as $notas)
            <tr>
                <td>{{ $notas->id }}</td>
                <td>
                    <a href="{{ route('detalles', $notas) }}">
                        {{ $notas->nombre }}
                    </a>
                </td>
                <td>{{ $notas->descripcion }}</td>
                <td>
                    <a href="{{ route('editar', $notas) }}" class="btn btn-outline-primary ">Editar
                    </a>

                    <form class="d-inline" action="{{ route('eliminar', $notas) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $nota->links() }}

    @endsection
