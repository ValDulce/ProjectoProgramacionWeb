<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nuevacategoria=categoria::all();
        return view('categorias.consulta',['categoria'=>$nuevacategoria]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorias=categoria::all();
        return view('categorias.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string|max:255|unique:categorias,tipo', ]// El nombre debe ser único
            ,['nombre.unique' => 'La categoria ya está registrada.'
            ]);
        $nuevocategorias=new categoria;
        $nuevocategorias->tipo=$request->tipo;
             
        $nuevocategorias->save();
        return redirect('/categoria')->with('success', 'categoria actualizada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $categoria)
    {
        //
        $nuevocategorias=categoria::findorfail($categoria);
        return view('categorias.actualizacion', ['categoria' => $nuevocategorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $categoria)
    {
        
    
        $nuevocategorias=categoria::findorfail($categoria);
        $nuevocategorias->tipo=$request->tipo;
             
        $nuevocategorias->save();
        return redirect('/categoria')->with('success', 'categoria creada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    //
        //categoria::destroy($categoria);
        //return redirect('/categoria');
    public function destroy( $categoria)
    {

        try {
            categoria::destroy($categoria);
        return redirect('/categoria')->with('success', 'El autor se eliminó correctamente.');
        } catch (\Exception $th) {
            return redirect()->back()->with('error', 'No puedes eliminar un registro que tiene relación con otra tabla.');
        }
    }
}
