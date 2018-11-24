<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;

class categoria extends Model
{
    protected $guarded = [];

    public function producto(){     
        return $this->belongsToMany(Producto::class,'categoria_producto','categoria_id','producto_id');
    }
}
