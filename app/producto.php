<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class producto extends Model
{
    protected $guarded = [];

    public function categoria(){
      
        return $this->belongsToMany(Categoria::class,'categoria_producto','producto_id','categoria_id');
    }



}
