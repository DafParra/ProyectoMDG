@extends('plantillas.master')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="text-dark">Roles</h1>

    <a class="btn text-light mb-4" style="background-color: #b9579bdd" href="{{ route('roles.create') }}">Nuevo Rol</a>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold " style="color: #B9579C">Listado de Roles</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>

                            <th>Nombre</th>
                            <th>Nombre Guard</th>
                            <th>Permisos</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $role->name }}</td>
                                <td>{{ $role->guard_name }}</td>
                                <td>
                                    @forelse ( $role ->Permissions as $permission )
                                        <span class="badge badge-info">{{$permission->name}}</span>
                                    @empty
                                    <span class="badge badge-danger">No tiene permisos</span>
                                    @endforelse
                                </td>

                                <td>
                                    <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                                        <a class="btn btn-sm btn-outline-primary " href="{{ route('roles.show',$role->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                        <a class="btn btn-sm btn-outline-success" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-fw fa-pencil-alt"></i> </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-fw fa-trash-alt"></i> </button>
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
<!-- /.container-fluid -->

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
            'Se creo un servicio con exito.',
            'success'
            )
    </script>
    @endif
    @if(session('mensaje2')=='Vale')
    <script>
        Swal.fire(
            '¡Editado!',
            'Se edito el servicio con exito.',
            'success'
            )
    </script>
    @endif
    @if(session('mensaje')=='Ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El servicio se elimino.',
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


