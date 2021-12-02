@extends('plantillas.master')

@section('contenido')
    <h1 style="color: #B9579C">Nuevo Tipo Servicio</h1>
    <form method="POST" action="{{route('tiposervicios.store')}}">
        @csrf

        <div class="mt-4">
            <label for="denominacion" class="form-label">Tipo de Servicio:</label><strong class='text-md-left text-danger'>*</strong>
            <input type="text" class="form-control" id="denominacion" name="denominacion" value="{{ old('denominacion') }}">
            <strong class="text-danger">{{ $errors-> first('denominacion') }}</strong>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn text-light" style="background-color: #b9579bdd"> Guardar</button>
            <a class="btn btn-danger " href="{{ route('tiposervicios.index') }}">Cancelar</a>
        </div>
        </div>
    </form>
@endsection
