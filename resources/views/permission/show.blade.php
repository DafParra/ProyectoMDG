@extends('plantillas.master')

@section('template_title')
    {{ $permission->name ?? 'Show Permission' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle Permiso</span>
                        </div>

                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre</strong>
                            {{ $permission->name }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle </strong>

                        </div>
                            <div class="">
                            <a class="btn btn-danger" href="{{ route('permissions.index') }}"> Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
