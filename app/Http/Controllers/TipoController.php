<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class TipoController extends Controller
{
    protected $guarded = [];

    public function index(){
        $tipos=Tipo::All();
        return view('Tipo.indexClaudia')->with('tipos',$tipos);
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
