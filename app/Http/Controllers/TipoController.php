<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;
use App\Producto;
use App\Categoria;

class TipoController extends Controller
{
    protected $guarded = [];

    public function index(){
        $tipos=Tipo::All();
        return view('Tipo.index')->with('tipos',$tipos);
    }

    public function show($id){
        $tipo=Tipo::find($id);
        $tipos=Tipo::All();
        $categorias=Categoria::All();

        if( $tipo !== null){
        return view('tipo.show')->with('tipo',$tipo)->with('tipos',$tipos)->with('categorias',$categorias);
        }
        return "No se ha encontrado el tipo de producto solicitado";
    }


    public function create(){
        return view('tipo.create');
    }

    public function guardar(Request $request)
    {
        $mensajes = [
           'required' => "Te olvidaste del :attribute ."
       ];

        $validaciones = [
        'nombre' => 'required | unique:Tipos,nombre',
       ];

       $this->validate($request,$validaciones,$mensajes); 

       $path = $request->file('img')->storePublicly('public/img_tipo');
       $path = str_replace('public','/storage',$path);
      
       $tipo = Tipo::create([
           'nombre' => $request->input('nombre'),
           'photo' => $path  
       ]);
       
       return redirect('/tipo/create');
    }

    public function edit($id){
        $tipo = Tipo::find($id);  

        if($tipo !== null){
            return view('Tipo.editar')->with('tipo',$tipo);
        } else { 
            return "No se ha encontrado el tipo solicitado";
        }
    }

    public function guardarCambios(Request $request, $id){
        $tipo = Tipo::find($id);        
            
        $tipo->nombre = $request->input('nombre');

        if ($request->has('img')) {
            $path = $request->file('img')->storePublicly('public/img_tipo');
            $path = str_replace('public','/storage',$path);
            $tipo->photo = $path;
            }

        $tipo->save();

        return redirect('/tipo/create');                    
    }

    public function delete($id)
    {
        $tipo = Tipo::find($id);
        $tipo->delete();
        
        return redirect('/tipo/create');      
    }


}
