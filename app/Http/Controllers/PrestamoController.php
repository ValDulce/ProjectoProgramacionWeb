<?php

namespace App\Http\Controllers;

use App\Models\prestamo;
use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\libro;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       // $prestamos=prestamo::all();
       // return view('prestamos.consulta',['prestamos'=>$prestamos]);
      
       $prestamos = Prestamo::where('estatus', 'incompleto')->get(); //  get() para obtener todos los registros
       return view('prestamos.consulta', ['prestamos' => $prestamos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        $usuario = usuario::all(); 
        $libro = libro::all(); 
    
        // Envía estas variables a la vista
        return view('prestamos.alta', ['usuarios'=> $usuario , 'libros'=> $libro]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nuevoprestamo=new prestamo;
        $nuevoprestamo->fechaPrestamo=$request->fechaPrestamo;
        $nuevoprestamo->fechaEntrega=$request->fechaEntrega;
        $nuevoprestamo->usuario=$request->usuario_id;
        $nuevoprestamo->libro=$request->libro_id;
        $nuevoprestamo->estatus=$request->estatus;
        
        $nuevoprestamo->save();
        return redirect('/prestamo');
    }

    /**
     * Display the specified resource.
     */
    public function show(prestamo $prestamo)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $prestamo)
    {
        //
        $usuario = usuario::all(); 
        $libro = libro::all(); 
        $prestamoeditar=prestamo::findorfail($prestamo);
      
       
        
        return view('prestamos.actualizacion', ['prestamo' => $prestamoeditar, 'usuarios'=> $usuario , 'libros'=> $libro]);
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $prestamo)
    {
        //
        $nuevoprestamo= prestamo::findorfail($prestamo);
        $nuevoprestamo->fechaPrestamo=$request->fechaPrestamo;
        $nuevoprestamo->fechaEntrega=$request->fechaEntrega;
        $nuevoprestamo->usuario=$request->usuario_id;
        $nuevoprestamo->libro=$request->libro_id;
        $nuevoprestamo->estatus=$request->estatus;
        $nuevoprestamo->save();
        return redirect('/prestamo');
    }

    /**
     * Remove the specified resource from storage.
     */

     //
         //prestamo::destroy($prestamo);
        // return redirect('/prestamo');
    public function destroy( $prestamo)
    {
        

        try {
            prestamo::destroy($prestamo);
            return redirect('/prestamo')->with('success', 'El prestamo se eliminó correctamente.');
        } catch (\Exception $th) {
            return redirect()->back()->with('error', 'No puedes eliminar un registro que tiene relación con otra tabla.');
        }
    }
}
