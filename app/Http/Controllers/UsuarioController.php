<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ClienteUpdateRequest;
use App\Http\Requests\StoreUsuario;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //seleccionar todos los usuarios
        $usuario = Usuario::paginate(10);
        //enviar datos seleccionados a la vista
        return view('usuario.index')->with('usuarios', $usuario);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuario $request)
    {


             //Crear el nuevo empleado
        $usuario= new Usuario;
        //asignar id
        $maxid =Usuario::all()->max('id');
        $maxid++;
        $usuario->id=$maxid;
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->save();

        //rediccionar al index, con mensaje de exito
        return redirect('usuarios')->with('mensaje3','Ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //consultar el usuario con id
        $usuario= Usuario::find($id);

        //enviar usuario a la vista
        return view('usuario.edit')
            ->with("usuario" , $usuario);

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
        $usuario=Usuario::find($id);
        //asignar el estado a actualizar
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->password = $request->input('password');

        //Persistir cambios en bd
        $usuario->save();
        return redirect()
            ->route('usuarios.index')
            -> with('mensaje2','Ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario){
        $usuario->delete();

        return redirect()
            ->route('usuarios.index')
            -> with('mensaje','Ok');
    }
    
}
