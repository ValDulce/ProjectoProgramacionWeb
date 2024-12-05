<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\autor;
use App\Models\categoria;
use App\Models\editorial;




class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $libros=libro::all();
        return view('libros.consulta',['libros'=>$libros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
      
        $autor = autor::all(); // Recupera  los autores
        $categoria = categoria::all(); // Recupera  las categorías
        $editorial = editorial::all(); // Recupera  las editoriales
    
        // Envía estas variables a la vista
        return view('libros.alta', ['autores'=> $autor , 'categoria'=> $categoria, 'editorial'=> $editorial]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nuevolibro=new libro;
        $nuevolibro->titulo=$request->titulo;
        $nuevolibro->año=$request->año;
        $nuevolibro->autor=$request->autor_id;
        $nuevolibro->categoria=$request->categoria_id;
        $nuevolibro->editorial=$request->editorial_id;
        
        $nuevolibro->save();
        return redirect('/libro');
    }

    /**
     * Display the specified resource.
     */
    public function show(libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $libro)
    {
        //
        $autor = autor::all(); // Recupera  los autores
        $categoria = categoria::all(); // Recupera  las categorías
        $editorial = editorial::all(); // Recupera  las editoriales

        $libroeditar=libro::findorfail($libro);
        return view('libros.actualizacion', ['libro' => $libroeditar, 'autores'=> $autor , 'categoria'=> $categoria, 'editorial'=> $editorial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $libro)
    {
        //
        $nuevolibro= libro::findorfail($libro);
        $nuevolibro->titulo=$request->titulo;
        $nuevolibro->año=$request->año;
        $nuevolibro->autor=$request->autor_id;
        $nuevolibro->categoria=$request->categoria_id;
        $nuevolibro->editorial=$request->editorial_id;
        
        $nuevolibro->save();
        return redirect('/libro');
    }

    /**
     * Remove the specified resource from storage.
     */

     //
        // libro::destroy($libro);
         //return redirect('/libro');
    public function destroy( $libro)
    {
        
        try {
            libro::destroy($libro);
            return redirect('/libro')->with('success', 'El libro se eliminó correctamente.');
        } catch (\Exception $th) {
            return redirect()->back()->with('error', 'No puedes eliminar un registro que tiene relación con otra tabla.');
        }
    }
}
