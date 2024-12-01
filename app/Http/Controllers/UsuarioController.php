<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuarioRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuarios=usuario::all();
        return view('usuarios.consulta',['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $usuario=usuario::all();
        return view('usuarios.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        //
        $nuevousuario=new usuario;
        $nuevousuario->nombre=$request->nombre;
        $nuevousuario->apellidoPat=$request->apellidoPat;
        $nuevousuario->apellidoMat=$request->apellidoMat;
        $nuevousuario->telefono=$request->telefono;
        $nuevousuario->direccion=$request->direccion;
        $nuevousuario->sexo=$request->sexo; 
      
        $nuevousuario->save();
        return redirect('/usuario');
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $usuario)
    {
        //
        $usuarioeditar=usuario::findorfail($usuario);
        return view('usuarios.actualizacion', ['usuario' => $usuarioeditar]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUsuarioRequest $request,  $usuario)
    {
        //
        $nuevousuario=usuario::findorfail($usuario);
        $nuevousuario->nombre=$request->nombre;
        $nuevousuario->apellidoPat=$request->apellidoPat;
        $nuevousuario->apellidoMat=$request->apellidoMat;
        $nuevousuario->telefono=$request->telefono;
        $nuevousuario->direccion=$request->direccion;
        $nuevousuario->sexo=$request->sexo;
       
        $nuevousuario->save();
        return redirect('/usuario')->with('success', 'Usuario actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($usuario)
    {
        usuario::destroy($usuario);
        return redirect('/usuario');
        
    }
}
