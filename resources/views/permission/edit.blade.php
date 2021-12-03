@extends('plantillas.master')

@section('template_title')
    Update Permission
@endsection

@section('contenido')
    <h1 style="color: #B9579C">Editar permiso</h1>
    <form method="POST" action="{{ route('permissions.update', $permission->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
        @csrf
        <div class="mt-4">
            <label for="name" class="form-label">Nombre:</label><strong class='text-md-left text-danger'>*</strong>
            <input type="text" class="form-control" id="name" name="name" value="{{ $permission->name }}">
            <strong class="text-danger">{{ $errors->first('name') }}</strong>
        </div>


        <div class="mt-4">
            <button type="submit" class="btn text-light" style="background-color: #b9579bdd"> Guardar</button>
            <a class="btn btn-danger " href="{{ route('permissions.index') }}" >Cancelar</a>
        </div>
        </div>
    </form>
@endsection
