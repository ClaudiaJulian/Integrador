<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Tipo;
use App\User;
use App\Carro;
use App\Nota;

class producto extends Model
{
    protected $guarded = [];

    public function categoria(){
        return $this->belongsToMany(Categoria::class,'categoria_producto','producto_id','categoria_id');
    }

    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }

    public function user(){
        return $this->belongsToMany(User::class,'producto_user','producto_id','user_id');
    }

    public function carro(){
        return $this->belongsToMany(Carro::class,'carro_producto','producto_id','carro_id');
    }

    public function nota(){
        return $this->belongsToMany(Nota::class,'nota_producto','producto_id','nota_id');
    }

}
