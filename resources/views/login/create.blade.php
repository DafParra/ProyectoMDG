@extends('plantillas.master')

@section('contenido')
    <h1>Nuevo Usuario</h1>
    <form method="POST" action="{{route('loginr.store')}}">
        @csrf
        <div class="mt-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
            <strong class="text-danger">{{ $errors->first('nombre') }}</strong>
        </div>
        <div class="mt-4">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido') }}">
            <strong class="text-danger">{{ $errors->first('apellido') }}</strong>
        </div>
        <div class="mt-4">
            <label for="email" class="form-label">Correo</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
            <strong class="text-danger">{{ $errors-> first('email') }}</strong>
        </div>
        <div class="mt-4">
            <label for="docu" class="form-label">Nº documento</label>
            <input type="int" class="form-control" id="docu" name="docu" value="{{ old('docu') }}">
            <strong class="text-danger">{{ $errors->first('docu') }}</strong>
        </div>
        <div class="mt-4">
            <label for="tipo_docu" class="form-label">Tipo de documento</label>
            <select name="tipo_docu" id="tipo_docu" class="form-control">
                @foreach ($documento as $tipo_docu)
                <option value="{{ $tipo_docu->idTipoDocumento }}" >
                    {{ $tipo_docu->denominacionTipoDocumento }}</option>

                @endforeach
            </select>
        </div>
        <div class="mt-4">
            <label for="tipo_usu" class="form-label">Tipo de Usuario</label>
            <select name="tipo_usu" id="tipo_usu" class="form-control">
                @foreach ($User as $tipo_usu)
                <option value="{{ $tipo_usu->idTipoUsuario }}" >
                    {{ $tipo_usu->nombreTipoUsuario}}</option>

                @endforeach
            </select>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary"> Guardar</button>
        </div>
        </div>
    </form>
@endsection
