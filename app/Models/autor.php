<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    //
    public function librof()
    {
        return $this->belongsTo(libro::class,'id','autor');
    }
    
}
