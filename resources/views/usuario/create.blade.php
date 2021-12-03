@extends('plantillas.master')

@section('contenido')
    <h1 style="color: #B9579C">Nuevo Usuario</h1>
    <form method="POST" action="{{route('usuarios.store')}}">
        @csrf




        <div class="form-group">
            <label for="name" class=" col-form-label text-md-left">{{ __('Nombre y apellido') }}</label><strong class='text-md-left text-danger'>*</strong>
            <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}"  placeholder="Su nombre y apellido">
        </div>


        <div class="form-group ">
            <label for="email" class=" col-form-label text-md-left">{{ __('Correo electronico') }}</label><strong class='text-md-left text-danger'>*</strong>
            <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}"  placeholder="ejemplo@gmail.com">
        </div>



             <div class="form-group row">
                <label for="password" class=" col-form-label text-md-right">{{ __('Contraseña') }}</label><br> <strong class='text-md-left text-danger'>*</strong>

                <div class="input-group" >
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <button style="background-color: #8c59a06f" id="show_password" class="btn" type="button" onclick="mostrarPassword()"><i class="fa fa-eye-slash icon"></i></button>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


                <label for="" class="mt-3">Roles</label>
                <table class="table mt-4 col-md-6">
                    <tbody>
                        @foreach ($roles as $id => $role)
                        <tr>
                            <td>
                                <div class="form-check ">
                                    <label for="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="roles[]" value="{{$id}}">
                                        <span class="form-check-sing">
                                            <span class="check"></span>
                                        </span>
                                    </label>

                                </div>
                            </td>
                            <td>
                                {{$role}}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>


        <div class="mt-4">
            <button type="submit" class="btn text-light" style="background-color: #b9579bdd"> Guardar</button>
            <a class="btn btn-danger " href="{{ route('usuarios.index') }}" >Cancelar</a>
        </div>
        </div>
    </form>
@endsection
