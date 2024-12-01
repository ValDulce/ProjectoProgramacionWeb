<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    //
    public function usuariof()
    {
        return $this->belongsTo(Usuario::class,'usuario','id');
    }

    public function librof()
    {
        return $this->belongsTo(Libro::class,'libro','id');
    }

    
}
