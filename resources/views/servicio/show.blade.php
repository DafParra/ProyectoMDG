@extends('plantillas.master')



@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle Servicio</span>
                        </div>

                    </div>

                    <div class="card-body">


                        <div class="form-group">
                            <strong>Peticio:</strong>
                            {{ $servicio->peticionServicio }}
                        </div>
                        <div class="form-group">
                            <strong>A nombre :</strong>
                            {{ $servicio->nombreDe }}
                        </div>

                        <div class="form-group">
                            <strong>Roles</strong>
                            @forelse ($servicio as $tipoServicio)
                                <span class="badge badge-info">{{$tipoServicio}}</span>
                            @empty
                                <span class="badge badge-danger">No tiene Servicio</span>

                            @endforelse

                        </div>
                        <div class="">
                            <a class="btn btn-danger" href="{{ route('servicios.index') }}"> Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
