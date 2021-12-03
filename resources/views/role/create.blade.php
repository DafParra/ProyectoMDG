@extends('plantillas.master')

@section('template_title')
    Create Role
@endsection

@section('content')
        <h1 style="color: #B9579C">Nuevo Permiso</h1>
                        <form method="POST" action="{{ route('roles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-4">
                                <label for="name" class="form-label">Nombre:</label><strong class='text-md-left text-danger'>*</strong>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                <strong class="text-danger">{{ $errors->first('name') }}</strong>
                            </div>
                            <label for="">Permisos</label>
                            <table class="table mt-4 col-md-6">
                                <tbody>
                                    @foreach ($permissions as $id => $permission)
                                    <tr>
                                        <td>
                                            <div class="form-check ">
                                                <label for="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="permissions[]" value="{{$id}}">
                                                    <span class="form-check-sing">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>

                                            </div>
                                        </td>
                                        <td>
                                            {{$permission}}
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>





                            <div class="mt-4">
                                <button type="submit" class="btn text-light" style="background-color: #b9579bdd" > Guardar</button>
                                <a class="btn btn-danger " href="{{ route('permissions.index') }}">Cancelar</a>
                            </div>

                        </form>
    </section>
@endsection
