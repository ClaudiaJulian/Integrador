<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Producto;
use App\Carro;
use App\Tipo;

class CarroController extends Controller
{
    //https://www.youtube.com/watch?v=wUedT2BKf7Q
    //https://es.stackoverflow.com/questions/178783/obtener-datos-de-un-usuario-en-laravel


    // Route::get('/carro','CarroController@show');
    // Route::get('/carro/create','CarroController@create');
    // Route::get('/carro/edit','CarroController@edit');
    // Route::get('/carro/trash','CarroController@trash');
    // Route::get('/carro/total','CarroController@total');
    // Route::get('/carro/pagar','CarroController@pagar');

    public function __construct(){
        if(!\Session::has('carro'))\Session::put('carro',array());
    }    

    public function show(){
        $carro = \Session::get('carro');
        return view('carro')->with('carro',$carro);
    }

    public function add($id){
        $carro = \Session::get('carro');
        $producto = Producto::find($id);
        $carro[] = $producto;
        \Session::put('carro',$carro);
        return view('carro')->with('carro',$carro);
    }

    public function edit(){
        return view('carro');
    }

    public function trash(){
        return view('carro');
    }
    public function total(){
    
        return view('carro');
    }
    public function pagar(){
        return view('carro');
    }

}