@extends('plantillas.master')

@section('contenido')
    <h1 style="color: #B9579C">Nuevo Usuario</h1>
    <form method="POST" action="{{route('usuarios.store')}}">
        @csrf
        <div class="form-group">
            <label for="name" class=" col-form-label text-md-left">{{ __('Nombre y apellido') }}</label><strong class='text-md-left text-danger'>*</strong>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Su nombre y apellido">  
        </div>


        <div class="form-group ">
            <label for="email" class=" col-form-label text-md-left">{{ __('Correo electronico') }}</label><strong class='text-md-left text-danger'>*</strong>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ejemplo@gmail.com">
        </div>


        <div class="form-group row">
            <label for="password" class=" col-form-label text-md-left">{{ __('Contraseña') }}</label><strong class='text-md-left text-danger'>*</strong>
            <div class="input-group-append">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <button style="background-color: #8c59a06f" id="show_password" class="btn" type="button" onclick="mostrarPassword()"><i class="fa fa-eye-slash icon"></i></button>
                    </div>
             </div>


        <div class="form-group row">
            <label for="password" class=" col-form-label text-md-left">{{ __('Confirmar Contraseña') }}</label><strong class='text-md-left text-danger'>*</strong>
            
            <div class="input-group-append">
                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                <button style="background-color: #8c59a06f" id="show_password" class="btn" type="button" onclick="mostrarPassword()"><i class="fa fa-eye-slash icon"></i></button>
                    </div>        
                </div>
        
        
        <div class="mt-4">
            <button type="submit" class="btn text-light" style="background-color: #b9579bdd"> Guardar</button>
            <a class="btn btn-danger " href="{{ route('usuarios.index') }}" >Cancelar</a>
        </div>
        </div>
    </form>
@endsection
