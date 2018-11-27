<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    function edit(){
        return view('User.perfil');
    }

    public function guardarCambios(Request $request, $id){
       
        $user=User::find($id);

        if ($user !== null){
            
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

     

        $user->save();
        

        return redirect('/');
                    
        } else {
            return "no se ha encontrado el usuario solicitado";
        }
    }



}
