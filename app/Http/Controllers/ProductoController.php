<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function create(){
        return view('producto.create');
    }

    public function guardar(Request $request)
    {
        $mensajes = [
           'required' => "Te olvidaste del :attribute ."
       ];

        $validaciones = [
        'nombre' => 'required',
        'marca' => 'required',
        'precio' => 'required',
        'tipo_id' => 'required',
        'categoria_id' => 'required',
        'qVentas' => 'required',
        'img' => 'required',
       ];

       $this->validate($request,$validaciones,$mensajes); 

       $path = $request->file('img')->storePublicly('public/img_producto');
       $path = str_replace('public','/storage',$path);
      
       $producto = Producto::create([
           'nombre' => $request->input('nombre'),
           'marca' => $request->input('marca'),
           'precio' => $request->input('precio'),
           'tipo_id' => $request->input('tipo_id'),
           'qVentas' => $request->input('qVentas'),
           'photo' => $path  
       ]);
       $producto->categoria()->sync($request->input('categoria_id'));
       
       return redirect('/producto/create');
    }






}
