<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $guarded = [];

    public function producto(){
        
        return $this->belongsToMany(Producto::class,'categoria_producto','categoria_id','pproducto_id');
    }
}
