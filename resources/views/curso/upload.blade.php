@extends('layouts.app')

@section('titulo', 'Actualizado')

@section('contenido')
    <div class="text-center">
        <div class="alert alert-success" role="alert">
            Los datos del curso han sido actualizados...
        </div>
        <a href="/curso" class="m-5 btn btn-dark">Volver</a>
    </div>
@endsection
