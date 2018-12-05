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
            $superTotal = $total;
            }
            return view('carro')->with('arrayCarro',$arrayCarro)->with('superTotal',$superTotal);
            }
            return \Redirect::to('/shop');
        }
        return view('Auth.login');       
    }
    
     
    public function add($id){
        if(Auth::user() !== null){
        $producto = Producto::find($id);
        // var_dump($producto['nombre']);

        $nota = Nota::create([
            'producto_id' => $producto['id'],
            'nombre'=> $producto['nombre'],
            'marca'=> $producto['marca'],
            'precio' => $producto['precio'],
            'photo' => $producto['photo']
        ]);

        // dd($nota);
       
        $arrayCarro = Nota::all();

        $total = 0;
        foreach($arrayCarro as $item){
        $total= $total + $item['precio']*$item['cantidad'];
        $superTotal = $total;
        }
        return \Redirect::to('/carro');
        // return view('carro')->with('arrayCarro',$arrayCarro)->with('superTotal',$superTotal);
        }
        return view('Auth.login');
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
            $superTotal = $total;
            }
            return \Redirect::to('/carro');  
            // return view('carro')->with('arrayCarro',$arrayCarro)->with('superTotal',$superTotal);
        }
        
        return \Redirect::to('/shop');
}


    public function edit(Request $request, $id){
        // dd($request['cantidad']);

        $producto = Nota::find($id);

        $producto->cantidad = $request['cantidad'];

        $producto->save();

        $arrayCarro = Nota::all();

            $total = 0;
            foreach($arrayCarro as $item){
            $total= $total + $item['precio']*$item['cantidad'];
            $superTotal = $total;
            }
            return view('carro')->with('arrayCarro',$arrayCarro)->with('superTotal',$superTotal);
           
           
    }

    
    public function pagar(){

        $user=Auth::user()->id;
        $arrayCarro = Nota::all();
        // $arrayCarro = Nota::where('user_id', $user)->get();


        $carro = Carro::create([
            'user_id' => $user,
        ]);

        // VER XQ NO ME SUBE TODOS LOS PRODUCTOS
        $carro->producto()->sync($arrayCarro->pluck("id"));
        
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