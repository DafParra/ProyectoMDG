@extends('plantillas.master')

@section('template_title')
    Create User
@endsection

@section('content')
<h1 style="color: #B9579C">Nuevo Usuario</h1>
                        <form method="POST" action="{{ route('users.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="mt-4">
                                <label for="name" class="form-label">Nombre:</label><strong class='text-md-left text-danger'>*</strong>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                <strong class="text-danger">{{ $errors->first('name') }}</strong>
                            </div>
                            <div class="mt-4">
                                <label for="email" class="form-label">Correo:</label><strong class='text-md-left text-danger'>*</strong>
                                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                <strong class="text-danger">{{ $errors-> first('email') }}</strong>
                            </div>
                            <div class="mt-4">
                                <label for="password" class="form-label">Contraseña:</label><strong class='text-md-left text-danger'>*</strong>
                                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                                <strong class="text-danger">{{ $errors-> first('password') }}</strong>
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
                                <button type="submit" class="btn text-light" style="background-color: #b9579bdd" > Guardar</button>
                                <a class="btn btn-danger " href="{{ route('servicios.index') }}">Cancelar</a>
                            </div>



                        </form>
    </section>
@endsection
