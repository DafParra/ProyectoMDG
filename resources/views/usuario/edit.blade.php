@extends('plantillas.master')

@section('contenido') 
    <h1 style="color: #B9579C">Editar Usuario</h1>
    <form method="POST" action="{{ route('usuarios.update',$usuario->id)}}">
        @method('PUT')
        @csrf
        <div class="mt-4">
            <label for="name" class="form-label">Nombre y apellido</label><strong class='text-md-left text-danger'>*</strong>
            <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name }}" 
            <strong class="text-danger">{{ $errors->first('name') }}</strong>
        </div>
        
        <div class="mt-4">
            <label for="email" class="form-label">Correo</label><strong class='text-md-left text-danger'>*</strong>
            <input type="text" class="form-control" id="email" name="email" value="{{ $usuario->email }}">
            <strong class="text-danger">{{ $errors-> first('email') }}</strong>
        </div>
        <div class="mt-4">
            <label for="password" class="form-label">Contraseña</label><strong class='text-md-left text-danger'>*</strong>
            <div class="input-group-append">
            <input type="password" class="form-control" id="password" name="password" value="{{ $usuario->password }}">
            <button style="background-color: #8c59a06f" id="show_password" class="btn" type="button" onclick="mostrarPassword()"><i class="fa fa-eye-slash icon"></i></button>
                </div>
            <strong class="text-danger">{{ $errors->first('password') }}</strong>
        </div>
       

        <div class="mt-4">
            <button type="submit" class="btn text-light" style="background-color: #b9579bdd"> Guardar</button>
            <a class="btn btn-danger " href="{{ route('usuarios.index') }}" style="display: inline-block">Cancelar</a>
        </div>
        </div>
    </form>
@endsection
