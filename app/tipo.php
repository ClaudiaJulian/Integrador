<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;

class tipo extends Model
{
    protected $guarded = [];

    public function producto(){
        return $this->hasMany(Producto::class);
    }

}
