@extends('plantillas.master')

@section('contenido')
    <h1 style="color: #B9579C">Editar el tipo de servicio</h1>
    <form method="POST" action="{{ route("tiposervicios.update",$tiposervicios->idTipoServicio )}}">
        @method('PUT')
        @csrf

        <div class="mt-4">
            <label for="denominacion" class="form-label">Tipo de servicio</label><strong class='text-md-left text-danger'>*</strong>
            <input type="text" class="form-control" id="denominacion" name="denominacion" value="{{ $tiposervicios->denominacionServicio }}">
        </div>


        <div class="mt-4">
            <button type="submit" class="btn text-light" style="background-color: #b9579bdd"> Guardar</button>
            <a class="btn btn-danger " href="{{ route('tiposervicios.index') }}" >Cancelar</a>
        </div>
        </div>
    </form>
@endsection
