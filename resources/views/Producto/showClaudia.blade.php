<!-- nobasic - ARCHIVO DE TRABAJO DE CLAUDIA  -->
@extends('Template.basicClaudia')

@section('content')

<section class="content" >
    <h2 class="titulo">Productos</h2>

    <div class="index">          
          <p ><a class="links" href="/producto">Todos los Productos</a></p>    
          <p ><a class="links" href="/tipo">Por Tipo</a></p>
          <p ><a class="links" href="/categoria">Por Categoria</a></p>
    </div>

    <div style="margin-top:20px;">
        <ul class="index">             
        <li class="pokebutton">  
            <a class="links" href="">
            <img src="{{ asset($producto['photo']) }}"> 
                <h3> {{$producto['nombre']}} </h3>
                <h3> {{$producto['marca']}} </h3>
                <h3> {{$producto['precio']}} </h3>
            </a>
        </li>
        </ul>
        <ul class="index">       
            
        </ul>      
    </div> 

    
</section>

@endsection