@extends('plantillas.master')

@section('contenido')
    <h1 style="color: #B9579C">Nuevo Servicio</h1>
    <form method="POST" action="{{route('servicios.store')}}" >
        @csrf
        <div class="mt-4">
            <label for="fecha" class="form-label">Fecha:</label><strong class='text-md-left text-danger'>*</strong>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}">
            <strong class="text-danger">{{ $errors->first('fecha') }}</strong>
        </div>
        <div class="mt-4">
            <label for="peticion" class="form-label">Peticion:</label><strong class='text-md-left text-danger'>*</strong>
            <input type="text" class="form-control" id="peticion" name="peticion" value="{{ old('peticion') }}">
            <strong class="text-danger">{{ $errors-> first('peticion') }}</strong>
        </div>
        <div class="mt-4">
            <label for="usupeticion" class="form-label">A nombre de:</label><strong class='text-md-left text-danger'>*</strong>
            <input type="text" class="form-control" id="usupeticion" name="usupeticion" value="{{ old('usupeticion') }}">
            <strong class="text-danger">{{ $errors-> first('usupeticion') }}</strong>
        </div>

        <div class="mt-4">
            <label for="tipservi" class="form-label">Tipo de servicio</label><strong class='text-md-left text-danger'>*</strong>
            <select name="tipservi" id="tipservi" class="form-control" placeholder="Tipo de servicio">
                @foreach ($servicios as $tipo_servi)
                <option value="{{ $tipo_servi->idTipoServicio }}" >
                    {{ $tipo_servi->denominacionServicio }}</option>

                @endforeach
            </select>
        </div>




        <div class="mt-4">
            <button type="submit" class="btn text-light" style="background-color: #b9579bdd" > Guardar</button>
            <a class="btn btn-danger " href="{{ route('servicios.index') }}">Cancelar</a>
        </div>
    </form>
    @section('js')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        $('.create').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿Estas seguro?',
            text: "¡Se creara un servicio!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, crealo!'
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
