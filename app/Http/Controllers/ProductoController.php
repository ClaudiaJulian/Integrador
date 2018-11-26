<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\User;

class ProductoController extends Controller
{

    public function welcome(){
        $sellers=Producto::where('id','>',0)->orderBy('qVentas','DESC')->take(4)->get();
        $news=Producto::where('id','>',0)->orderBy('created_at','DESC')->take(4)->get();
        $ofertas=Producto::where('oferta','>',0)->take(6)->get();

        $categoria=Categoria::All();
        
        return view('welcome')->with('sellers',$sellers)->with('news',$news)->with('ofertas',$ofertas)->with('categoria',$categoria);
    }

    public function shop(){
        return view('shop');
    }

    public function index(){
        $productos=Producto::All();
        $user=Auth::user()->id;
        return view('Producto.indexClaudia')->with('productos',$productos)->with('user',$user);
    }

    public function show($id){
        $producto=Producto::find($id);
        $user=Auth::user()->id;
        if( $producto !== null){
        return view('Producto.showClaudia')->with('producto',$producto)->with('user',$user);
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
        'stock' => 'required',
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
           'stock'=> $request->input('stock'),
           'oferta'=> $request->input('oferta'),
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
        $producto->stock = $request->input('stock');
        $producto->oferta = $request->input('oferta');
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
