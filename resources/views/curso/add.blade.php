@extends('layouts.app')

@section('titulo', 'Añadido')

@section('contenido')
    <div class="text-center">
        <div class="alert alert-success" role="alert">
            El curso se creó correctamente...
        </div>
        <a href="/curso" class="m-5 btn btn-dark">Volver</a>
    </div>
@endsection
