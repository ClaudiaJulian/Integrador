<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;
use App\Tipo;

class CategoriaController extends Controller
{
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

    public function create(){
        return view('categoria.create');
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
       
       return redirect('/categoria/create');
    }

    public function edit($id){
        $categoria = Categoria::find($id);  

        if($categoria !== null){
            return view('Categoria.editar')->with('categoria',$categoria);
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

        return redirect('/categoria/create');                    
    }    
    
    public function delete($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        
        return redirect('/categoria/create');      
    }




    
}
