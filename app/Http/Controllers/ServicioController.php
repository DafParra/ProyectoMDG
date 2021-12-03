<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\TipoServicio;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServicio;
use PDF;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //seleccionar todos los clientes
        $servicios = Servicio::paginate(10);
        //enviar datos seleccionados a la vista
        return view('servicio.index')->with('servicios', $servicios);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //seleccionar los agentes de ventas
        $tipo_servi = TipoServicio::get('denominacionServicio','idTipoServicio');
        //Mostrar vista: ingresando a los agentes de ventas
        return view('servicio.create') ->with("servicios", $tipo_servi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\StoreServicio $request)
    {

        // $request
             //Crear el nuevo servicio
        $servicio= new Servicio;
        //asignar id
        $maxid =Servicio::all()->max('idServicio');
        $maxid++;
        $servicio->idServicio=$maxid;
        $servicio->fechaServicio = $request->input('fecha');
        $servicio->peticionServicio = $request->input('peticion');
        $servicio->nombreDe = $request->input('usupeticion');
        $servicio->idTipServicioFK = $request->input('tipservi');
        $servicio->estadoServicio = 'Activo';
        //var_dump($servicio);
        $servicio->save();

        //rediccionar al index, con mensaje de exito
        return redirect('servicios.index') ->with('mensaje3','Ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Servicio $servicio)
    {
        $servicio ->load('tiposervicio');

        return view('servicio.show', compact('servicio'));
        //seleccionar cliente en base de datos
        //

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
        $servicio= Servicio::find($id);
        //vendedores
        $tipo_servi = TipoServicio::get();
        //enviar cliente a la vista
        return view('servicio.edit')
            ->with("servicio" , $servicio)
            ->with("tservicios",$tipo_servi);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //seleccionar el cliente a actualizar
        $servicio=Servicio::find($id);
        //asignar el estado a actualizar
        $servicio->fechaServicio= $request->input('fecha');
        $servicio->peticionServicio= $request->input('peticion');
        $servicio->nombreDe = $request->input('usupeticion');
        //asignacion de agente de ventas
        if($request->input('tipservi')!=="Sin tipo servicio"){
            $servicio->idTipServicioFK=$request->input('tipservi');
        } else{
            $servicio->idTipServicioFK=null;
        }
        //Persistir cambios en bd
        $servicio->save();
        return redirect()
            ->route('servicios.index')
            -> with('mensaje2','Vale');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio){
        $servicio->delete();

        return redirect()
            ->route('servicios.index')
            -> with('mensaje','Ok');
    }


    // Habilitar o deshabilitar Clientes

}
