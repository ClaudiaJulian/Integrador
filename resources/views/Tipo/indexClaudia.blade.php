<!-- nobasic - ARCHIVO DE TRABAJO DE CLAUDIA  -->


@extends('Template.basicClaudia')

@section('content')

<section class="content" >
    <h2 class="titulo">Tipos</h2>

    <div class="">          
          <p ><a class="links" href="/producto">Todos los Productos</a></p>    
          <p ><a class="links" href="/categoria">Por Categoria</a></p>
    </div>
    
    <div style="margin-top:20px;">
        <ul class="">             
        @foreach($tipos as $tipo)

        <li class="pokebutton">  
            <a class="links" href="tipo/{{$tipo['id']}}">
                <img src="{{ asset($tipo->photo) }}"> 
                <h3> {{$tipo['nombre']}} </h3>
            </a>
        </li>
     
        @endforeach
        </ul>      
    </div> 

    
</section>

@endsection