<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    //
    public function autorf()
    {
        return $this->belongsTo(autor::class,'autor','id');
    }

    public function categoriaf()
    {
        return $this->belongsTo(categoria::class,'categoria','id');
    }

    public function editorialf()
    {
        return $this->belongsTo(editorial::class,'editorial','id');
    }

    

}
