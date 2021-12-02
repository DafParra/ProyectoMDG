<?php

namespace App\Http\Controllers;

use App\Models\TipoServicio;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTipoServicio;

class TipoServicioController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //seleccionar todos los clientes
        $tiposervicios = TipoServicio::paginate(10);
        //enviar datos seleccionados a la vista
        return view('tiposervicio.index')->with('tiposervicios', $tiposervicios);
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //seleccionar los agentes de ventas

        //Mostrar vista: ingresando a los agentes de ventas
        return view('tiposervicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoServicio $request)
    {


             //Crear el nuevo empleado
        $tiposervicios= new TipoServicio;
        //asignar id
        $maxid =TipoServicio::all()->max('idTipoServicio');
        $maxid++;
        $tiposervicios->idTipoServicio=$maxid;
        $tiposervicios->denominacionServicio = $request->input('denominacion');
        $tiposervicios->Estado = 'Activo';
        $tiposervicios->save();

        //rediccionar al index, con mensaje de exito
        return redirect('tiposervicios')->with('mensaje3','Ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //seleccionar cliente en base de datos
        //
        return view ('tiposervicio.show') -> with('tiposervicio', TipoServicio::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //consultar el cliente con id
        $tiposervicios= TipoServicio::find($id);

        //var_dump($tiposervicios);

        //enviar cliente a la vista
        return view('tiposervicio.edit')
            ->with("tiposervicios" , $tiposervicios);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTipoServicio $request, $id)
    {

        //seleccionar el cliente a actualizar
        $tiposervicios=TipoServicio::find($id);
        //asignar el estado a actualizar
        $tiposervicios->denominacionServicio= $request->input('denominacion');


        //Persistir cambios en bd
        $tiposervicios->save();
        return redirect()
            ->route('tiposervicios.index')
            -> with('mensaje2','Ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoServicio $tiposervicios){
        $tiposervicios->delete();

        return redirect()
            ->route('tiposervicios.index')
            -> with('mensaje','Ok');
    }
    
}
