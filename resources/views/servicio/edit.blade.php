@extends('plantillas.master')

@section('contenido')
    <h1 style="color: #B9579C">Editar Servicio</h1>
    <form method="POST" action="{{ route('servicios.update',$servicio->idServicio)}}">
        @method('PUT')
        @csrf
        <div class="mt-4">
            <label for="fecha" class="form-label">Fecha:</label><strong class='text-md-left text-danger'>*</strong>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $servicio->fechaServicio }}">
            <strong class="text-danger">{{ $errors->first('fecha') }}</strong>
        </div>
        <div class="mt-4">
            <label for="peticion" class="form-label">Peticion:</label><strong class='text-md-left text-danger'>*</strong>
            <input type="text" class="form-control" id="peticion" name="peticion" value="{{ $servicio->peticionServicio }}">
            <strong class="text-danger">{{ $errors-> first('peticion') }}</strong>
        </div>
        <div class="mt-4">
            <label for="usupeticion" class="form-label">A nombre de:</label><strong class='text-md-left text-danger'>*</strong>
            <input type="text" class="form-control" id="usupeticion" name="usupeticion" value="{{ $servicio->usuPeticion}}">
            <strong class="text-danger">{{ $errors-> first('usupeticion') }}</strong>
        </div>

        <div class="mt-4">
            <label for="tipservi" class="form-label">Tipo de servicio</label><strong class='text-md-left text-danger'>*</strong>
            <select name="tipservi" id="tipservi" class="form-control">
                <option >Sin tipo de servicio</option>
                @foreach ($tservicios as $tipo_servi)
                <option value="{{ $tipo_servi->idTipoServicio }}"
                    @if ($tipo_servi->idTipoServicio == $servicio->idTipServicioFK)
                        selected
                    @endif >
                    {{ $tipo_servi->denominacionServicio }}</option>

                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn text-light" style="background-color: #b9579bdd"> Guardar</button>
            <a class="btn btn-danger " href="{{ route('servicios.index') }}" >Cancelar</a>
        </div>
        </div>
    </form>
@endsection
