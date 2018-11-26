<!-- nobasic - ARCHIVO DE TRABAJO DE CLAUDIA  -->

@extends('Template.basicClaudia')

@section('content')

<section class="content" >
    <h2 class="titulo">Por tipo de producto</h2>

    <div class="index">          
          <p ><a class="links" href="/producto">Todos los Productos</a></p>    
          <p ><a class="links" href="/tipo">Por Tipo</a></p>
          <p ><a class="links" href="/categoria">Por Categoria</a></p>
    </div>

    <div style="">
    @foreach($tipo->producto as $produc)
        <ul class="form" style="margin:15px;">             
            <img src="{{ asset($produc['photo']) }}"> 
            <li style="list-style:none"> {{ $produc['nombre'] ." - ". $produc->tipo->nombre }} </li>
            <li style="list-style:none"> {{ $produc['marca'] }} </li>
            <li style="list-style:none"> ${{ $produc['precio'] }} </li>
            <button type="submit">Comprar</button>        
        </ul>
        @endforeach
    </div> 

    
</section>

@endsection