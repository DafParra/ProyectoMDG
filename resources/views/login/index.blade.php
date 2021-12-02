@extends('plantillas.master')

@section('contenido')
    <h1 class="text-info">Listado de usuarios</h1>
    @if (session('mensaje'))
        <p class="alert-success">{{ session('mensaje')}}</p>

    @endif
    <a class="btn btn-primary mb-4" href="{{ route('loginr.create') }}">Nuevo usuario</a>
    <table class="table table-border">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Email</th>
                <th>Documento</th>
                <th>Tipo de documento</th>
                <th>Tipo de usuario</th>
                <th>Actualizar</th>
            </tr>
        </thead>
        <tbody class="table-secondary">
            @foreach ($loginr as $login)
                <tr>
                    <td>
                        {{ $login->nombreUsuario }}
                        {{ $login->apellidoUsuario }}
                    </td>
                    <td>{{ $login->correoUsuario }}</td>
                    <td>{{ $login->numeroDocumentoUsuario }} </td>

                    <td>{{ $login->idTipoDocumentoUFK }} </td>
                    <td>{{ $login->idTipoUsuarioUFK }} </td>

                    <td><a class="btn btn-outline-success" href=" {{ route('loginr.edit',$login->idUsuario) }} ">Editar</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $loginr->links() }}
@endsection
