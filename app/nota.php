<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;

class nota extends Model
{
    protected $guarded = [];

    public function producto(){
        return $this->hasMany(Producto::class);
    }
}
