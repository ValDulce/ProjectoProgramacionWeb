<?php

namespace App\Http\Controllers;

use App\Models\editorial;
use Illuminate\Http\Request;


class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $editorial=editorial::all();
        return view('editoriales.consulta',['editorial'=>$editorial]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $editorial=editorial::all();
        return view('editoriales.alta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos antes de guardarlos
        $nuevoeditorial=new editorial;
        $nuevoeditorial->Nombre_editorial=$request->Nombre_editorial;
        
        $nuevoeditorial->save();
        return redirect('/editorial');
    }

    /**
     * Display the specified resource.
     */
    public function show(editorial $editorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $editorial)
    {
        //
        $editorialeditar=editorial::findorfail($editorial);
        return view('editoriales.actualizacion', ['editorial' => $editorialeditar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $editorial)
    {
        $nuevoeditorial=editorial::findorfail($editorial);
        $nuevoeditorial->Nombre_editorial=$request->Nombre_editorial;
        
        $nuevoeditorial->save();
        return redirect('/editorial');
    }

    /**
     * Remove the specified resource from storage.
     */

     //
        //editorial::destroy($editorial);
        //return redirect('/editorial');

    public function destroy( $editorial)
    {
        try {
            editorial::destroy($editorial);
        return redirect('/editorial')->with('success', 'La editorial se eliminó correctamente.');
        } catch (\Exception $th) {
            return redirect()->back()->with('error', 'No puedes eliminar un registro que tiene relación con otra tabla.');
        }
    }
}
