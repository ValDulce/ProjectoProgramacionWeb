<?php

namespace App\Http\Controllers;

use App\Models\autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $autor=autor::all();
        return view('autores.consulta',['autores'=>$autor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $autor=autor::all();
        return view('autores.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nuevoautor=new autor;
        $nuevoautor->nombre=$request->nombre;
        $nuevoautor->apellidoPat=$request->apellidoPat;
        $nuevoautor->apellidoMat=$request->apellidoMat;
       
        $nuevoautor->sexo=$request->sexo; 
        $nuevoautor->edad=$request->edad;
        $nuevoautor->save();
        return redirect('/autor');
    }

    /**
     * Display the specified resource.
     */
    public function show(autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $autor)
    {
        //
        $autoreditar=autor::findorfail($autor);
        return view('autores.actualizacion', ['autor' => $autoreditar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $autor)
    {
        //
        $nuevoautor=autor::findorfail($autor);;
        $nuevoautor->nombre=$request->nombre;
        $nuevoautor->apellidoPat=$request->apellidoPat;
        $nuevoautor->apellidoMat=$request->apellidoMat;
        
        $nuevoautor->sexo=$request->sexo; 
        $nuevoautor->edad=$request->edad;
        $nuevoautor->save();
        return redirect('/autor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $autor)
    {
        //
        autor::destroy($autor);
        return redirect('/autor');
    }
}
