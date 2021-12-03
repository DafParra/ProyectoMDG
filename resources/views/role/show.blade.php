@extends('plantillas.master')

@section('template_title')
    {{ $role->name ?? 'Show Role' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle Role</span>
                        </div>

                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $role->name }}
                        </div>

                        <div class="form-group"><strong>Permisos:</strong>
                            @forelse ( $role ->Permissions as $permission )
                                <span class="badge badge-info">{{$permission->name}}</span>
                            @empty
                                <span class="badge badge-danger">No tiene permisos</span>
                            @endforelse
                        </div>
                        <div class="">
                            <a class="btn btn-danger" href="{{ route('roles.index') }}"> Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
