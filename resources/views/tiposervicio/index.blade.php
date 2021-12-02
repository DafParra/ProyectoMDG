@extends('plantillas.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')

<div class="container-fluid mt-1">

    <h1 class="text-dark">Tipos de servicios</h1>

    <a style="background-color: #b9579bdd" class="btn mb-4 text-light" href="{{ route('tiposervicios.create') }}">Nuevo tipo de servicio</a>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold " style="color: #B9579C">Listado de tipos de servicios</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>denominacion</th>
                            <th>Actualizar</th>
                        </tr>
                    </thead>

                        <tbody class="table-secondary">
                            @foreach ($tiposervicios as $tiposervicio)
                <tr>
                    <td>{{ $tiposervicio->idTipoServicio }}</td>
                      <td>{{ $tiposervicio->denominacionServicio }}</td>
                    <td><a class="btn btn-outline-success" href=" {{ route('tiposervicios.edit',$tiposervicio->idTipoServicio) }} "><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('tiposervicios.destroy',$tiposervicio) }}" method="POST" style="display: inline-block" class="form-delete">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>

                </tr>
            @endforeach
                        </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

    {{ $tiposervicios->links() }}

    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" > </script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
            });
        } );
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('mensaje3')=='Ok')
    <script>
        Swal.fire(
            '¡Creado!',
            'Se creo un tipo servicio con exito.',
            'success'
            )
    </script>
    @endif
    @if(session('mensaje2')=='Ok')
    <script>
        Swal.fire(
            '¡Editado!',
            'Se edito el tipo servicio con exito.',
            'success'
            )
    </script>
    @endif
    @if(session('mensaje')=='Ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El tipo servicio se elimino.',
                'success'
                )
        </script>
    @endif

    <script>

        $('.form-delete').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿Estas seguro?',
            text: "¡Se eliminara este servicio!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, eliminalo!'
            cancelButtonText: '¡No, cancelalo!'
            }).then((result) => {
            if (result.value) {


               this.submit();
            }
            })
            })



    </script>
    @endsection
@endsection
