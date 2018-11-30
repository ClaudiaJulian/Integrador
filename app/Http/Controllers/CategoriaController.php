<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;
use App\Tipo;

class CategoriaController extends Controller
{
// A LAS VISTAS AL USUARIO & GUEST

    public function index(){
    $categorias=Categoria::All();
    return view('Categoria.index')->with('categorias',$categorias);
    }

    public function show($id){
        $categoria=Categoria::find($id);
        $tipo=Tipo::All();
        $categorias=Categoria::All();

        if( $categoria !== null){
        return view('categoria.show')->with('categoria',$categoria)->with('tipo',$tipo)->with('categorias',$categorias);
        }
        return "No se ha encontrado el categoria de producto solicitado";
    }

// A LAS VISTAS DEL ADMIN

    public function showAdmin($id){
    $categoria=Categoria::find($id);
    $tipo=Tipo::All();
    $categorias=Categoria::All();

    if( $categoria !== null){
    return view('categoria.showAdmin')->with('categoria',$categoria)->with('tipo',$tipo)->with('categorias',$categorias);
    }
    return "No se ha encontrado el categoria de producto solicitado";
    }

    public function create(){
        $categorias=Categoria::All();
        $tipo=Tipo::All();
        return view('categoria.create')->with('categorias',$categorias)->with('tipo',$tipo);
    }

    public function guardar(Request $request)
    {
        $mensajes = [
           'required' => "Te olvidaste del :attribute ."
       ];

        $validaciones = [
        'nombre' => 'required',
       ];

       $this->validate($request,$validaciones,$mensajes); 

       $path = $request->file('img')->storePublicly('public/img_categoria');
       $path = str_replace('public','/storage',$path);
      
       $categoria = Categoria::create([
           'nombre' => $request->input('nombre'),
           'photo' => $path  
       ]);
       
       return redirect('/admin');
    }

    public function edit($id){
        $categoria = Categoria::find($id); 
        $categorias = Categoria::all();
        $tipo=Tipo::all(); 

        if($categoria !== null){
            return view('Categoria.editar')->with('categoria',$categoria)->with('categorias',$categorias)->with('tipo',$tipo);
        } else { 
            return "No se ha encontrado la categoria solicitada";
        }
    }

    public function guardarCambios(Request $request, $id){
        $categoria=Categoria::find($id);        
            
        $categoria->nombre = $request->input('nombre');

        if ($request->has('img')) {
            $path = $request->file('img')->storePublicly('public/img_categoria');
            $path = str_replace('public','/storage',$path);
            $categoria->photo = $path;
            }

        $categoria->save();

        return redirect('/admin');                    
    }    
    
    public function delete($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        
        return redirect('/admin');      
    }




    
}
