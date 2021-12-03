@extends('plantillas.master')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle usuario</span>
                        </div>

                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>

                        <div class="form-group">
                            <strong>Roles</strong>
                            @forelse ($user->roles as $role)
                                <span class="badge badge-info">{{$role->name}}</span>
                            @empty
                                <span class="badge badge-danger">No tiene rol</span>

                            @endforelse

                        </div>
                        <div class="">
                            <a class="btn btn-danger" href="{{ route('users.index') }}"> Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
