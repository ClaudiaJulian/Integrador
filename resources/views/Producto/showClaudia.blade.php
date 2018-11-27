
@extends('Template.Admin')

@section('content')

<section class="content" >
    <h1>Esta sección es Administrativa </h1>
    <h2 class="titulo">Productos</h2>

    <div class="index">          
          <p ><a class="links" href="/shop">Todos los Productos</a></p>    
    </div>

    <div style="">
        <ul class="form" style="margin:15px;">             
            <img src="{{ asset($producto['photo']) }}"> 
            <li style="list-style:none"> {{ $producto['nombre'] ." - ". $producto->tipo->nombre }} </li>
            <li style="list-style:none"> {{ $producto['marca'] }} </li>
            <li style="list-style:none"> ${{ $producto['precio'] }} </li>
            <button type="submit"><a href="carro/{{ $producto->slug}}">Comprar</a></button>        
        </ul>
    </div> 

    
</section>

@endsection