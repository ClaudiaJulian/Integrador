<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductoController extends Controller
{
    public function index(){
        $productos=Producto::All();
        return view('Producto.indexClaudia')->with('productos',$productos);
    }

    public function show($id){
        $producto=Producto::find($id);
        if( $producto !== null){
        return view('Producto.showClaudia')->with('producto',$producto);
        }
        return "No se ha encontrado el producto solicitado";
    }

    public function create(){
        $categorias=Categoria::All();
        return view('producto.create')->with('categorias',$categorias);
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

    public function edit($id)
    {
        $producto=Producto::find($id);
        $categorias = Categoria::all();  

        if($producto !== null){
            return view('Producto.editar')->with('producto',$producto)->with('categorias',$categorias);
        } else { 
         return "No se ha encontrado el producto solicitado"; }
    }

    public function guardarCambios(Request $request, $id){
        $producto=Producto::find($id);

        if ($producto !== null){
            
        $producto->nombre = $request->input('nombre');
        $producto->marca = $request->input('marca');
        $producto->precio = $request->input('precio');
        $producto->tipo_id = $request->input('tipo_id');
        $producto->qVentas = $request->input('qVentas');

        if ($request->has('img')) {
            $path = $request->file('img')->storePublicly('public/img_producto');
            $path = str_replace('public','/storage',$path);
            $producto->photo = $path;
            }

        $producto->save();
        $producto->categoria()->sync($request->input('categoria_id'));

        return redirect('/producto/create');
                    
        } else {
            return "no se ha encontrado el producto solicitado";
        }
    }

    public function delete($id)
    {
        $tipo = Producto::find($id);
        $tipo->delete();
        
        return redirect('/producto/create');      
    }





}
