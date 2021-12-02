<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF de Servicios</title>
</head>
<body>
    

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="text-dark">Servicios</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Id tipo servicio</th>
                                <th>Peticion</th>
                                <th>A nombre</th>
                                
                                
                            </tr>
                        </thead>

                            <tbody class="table-secondary">
                                @foreach ($servicios as $servicio)
                                    <tr>
                                        <td>
                                            {{ $servicio->fechaServicio }}
                                        </td>
                                        <td>
                                            {{ $servicio->tipoServicio->denominacionServicio }}
                                        </td>
                                        <td>
                                            {{ $servicio->peticionServicio}}
                                        </td>
                                        <td>
                                            {{ $servicio->nombreDe}}
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
</body>
</html>