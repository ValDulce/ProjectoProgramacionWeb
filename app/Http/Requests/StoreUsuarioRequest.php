<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Permitir siempre por ahora
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:50',
            'apellidoPat' => 'required|string|max:40',
            'apellidoMat' => 'nullable|string|max:40',
            'telefono' => 'required|string|max:15|unique:usuarios,telefono',
            'direccion' => 'required|string|max:250',
            
        ];
    }
}
