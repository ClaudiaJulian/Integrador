<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Producto;
use App\Categoria;
use App\Tipo;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function shop(){
        $ofertas=Producto::where('oferta','>',0)->get();
        $categoria=Categoria::All();
        $tipo=Tipo::All();
        return view('shop')->with('ofertas',$ofertas)->with('categoria',$categoria)->with('tipo',$tipo);
    }

    public function faq()
    {
        return view('faq');
    }

    public function contacto()
    {
        return view('contacto');
    }

      





}
