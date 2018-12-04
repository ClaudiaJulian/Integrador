<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use App\User;
use App\Producto;
use App\Carro;
use App\Tipo;
use Auth;
use App\Nota;


class CarroController extends Controller
{

    public function show(){
        if(Auth::user() !== null){
            $arrayCarro = Nota::all();

            if(!$arrayCarro->isEmpty()){
                $total = 0;
                foreach($arrayCarro as $item){
                $total= $total + $item['precio']*$item['cantidad'];
                }

                return view('carro')->with('arrayCarro',$arrayCarro)->with('total',$total);
            }
                return \Redirect::to('/shop');
        }
        return view('Auth.login');       
    }
    
     
    public function add($id){
        $producto = Producto::find($id);
        // var_dump($producto['nombre']);

        $nota = Nota::create([
            'producto_id' => $producto['id'],
            'nombre'=> $producto['nombre'],
            'marca'=> $producto['marca'],
            'precio' => $producto['precio']
        ]);

        // dd($nota);
       
       $arrayCarro = Nota::all();

        $total = 0;
        foreach($arrayCarro as $item){
        $total= $total + $item['precio']*$item['cantidad'];
        }

        return view('carro')->with('arrayCarro',$arrayCarro)->with('total',$total);
    }

    public function delete(Int $id){
    
        $arrayCarro = Nota::all();
        
        foreach($arrayCarro as $item){         
            if($item['id'] === $id){                 
                $item->delete();
            } 
        }
    
        $arrayCarro = Nota::all();

        if(!$arrayCarro->isEmpty()){
            $total = 0;
            foreach($arrayCarro as $item){
            $total= $total + $item['precio']*$item['cantidad'];
            }
            return view('carro')->with('arrayCarro',$arrayCarro)->with('total',$total);
        }
        
        return \Redirect::to('/shop');
}


    public function edit(){
        return view('carro');
    }

    
 
  
    public function pagar(){
        $arrayCarro = Nota::all();

        $user=Auth::user()->id;


        $carro = Carro::create([
            'user_id' => $user,
        ]);

        // VER XQ NO ME SUBE TODOS LOS PRODUCTOS
        foreach($arrayCarro as $producto){
        $carro->producto()->sync($producto['producto_id']);
        }    
        
        foreach($arrayCarro as $item){                      
                $item->delete();
        }

        return \Redirect::to('/shop');
    }


    public function vaciar(){
        $arrayCarro = Nota::all();

        foreach($arrayCarro as $item){                      
                $item->delete();
        }

        return \Redirect::to('/shop');
    }






}