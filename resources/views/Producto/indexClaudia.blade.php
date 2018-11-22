<!-- nobasic - AREA DE TRABAJO DE CLAUDIA  -->

@extends('Template.basicClaudia')

@section('content')

<section class="content" >
    <h2 class="titulo">Productos</h2>

    <div class="index">          
          <p ><a class="links" href="/categoria">Por Categoria</a></p>    
          <p ><a class="links" href="/tipo">Por Tipo</a></p>
    </div>
    
    <div style="margin-top:20px;">
        <ul class="">             
        @foreach($productos as $produc)

        <li class="pokebutton">  
            <a class="links" href="producto/{{$produc['id']}}">
                <img src="{{ asset($produc->photo) }}"> 
                <h3> {{$produc['nombre']}} </h3>
                <h3> {{$produc['precio']}} </h3>

            </a>
        </li>
     
        @endforeach
        </ul>      
    </div> 

    
</section>

@endsection