<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Tipo;
use App\User;

class ProductoController extends Controller
{
// A LAS VISTAS AL USUARIO & GUEST

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
        $tipo=Tipo::All();
        $categorias=Categoria::All();
        return view('Producto.index')->with('productos',$productos)->with('tipo',$tipo)->with('categorias',$categorias);
    }

    public function show($id){
        $producto=Producto::find($id);
        $tipo=Tipo::All();
        $categorias=Categoria::All();
        if( $producto !== null){
        return view('Producto.show')->with('producto',$producto)->with('tipo',$tipo)->with('categorias',$categorias);
        }
        return "No se ha encontrado el producto solicitado";
    }

    public function ofertas(){
        $ofertas=Producto::where('oferta','>',0)->take(6)->get();
        $tipo=Tipo::All();
        $categoria=Categoria::All();
       
       return view('ofertas')->with('ofertas',$ofertas)->with('tipo',$tipo)->with('categoria',$categoria);
   }

   public function sellers(){
       $sellers=Producto::where('id','>',0)->orderBy('qVentas','DESC')->take(4)->get();
       $tipo=Tipo::All();
       $categoria=Categoria::All();
       
       return view('sellers')->with('sellers',$sellers)->with('tipo',$tipo)->with('categoria',$categoria);
   }

   public function news(){
       $news=Producto::where('id','>',0)->orderBy('created_at','DESC')->take(4)->get();
       $tipo=Tipo::All();
       $categoria=Categoria::All();
       
       return view('news')->with('news',$news)->with('tipo',$tipo)->with('categoria',$categoria);
   }

// A LAS VISTAS DE ADMIN

    public function indexAdmin(){
        $productos=Producto::All();
        $tipo=Tipo::All();
        $categorias=Categoria::All();
        return view('Producto.indexAdmin')->with('productos',$productos)->with('tipo',$tipo)->with('categorias',$categorias);
    }

    public function create(){
        // $productos=Producto::All();
        $tipo=Tipo::All();
        $categorias=Categoria::All();
        return view('producto.create')->with('categorias',$categorias)->with('tipo',$tipo);
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
       
       return redirect('/admin');
    }

    public function edit($id)
    {
        $producto=Producto::find($id);
        $categorias = Categoria::all();
        $tipo=Tipo::All();  

        if($producto !== null){
            return view('Producto.editar')->with('producto',$producto)->with('categorias',$categorias)->with('tipo',$tipo);
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

        return redirect('/admin');
                    
        } else {
            return "no se ha encontrado el producto solicitado";
        }
    }

    public function delete($id)
    {
        $tipo = Producto::find($id);
        $tipo->delete();
        
        return redirect('/admin');      
    }







}
