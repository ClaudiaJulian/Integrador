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
        <ul class="form">             
        @foreach($tipos as $tipo)
        <a class="" href="tipo/{{$tipo['id']}}">
        <li style="list-style:none"><img src="{{ asset($tipo->photo) }}"></li> 
        <li style="list-style:none"><h3> {{$tipo['nombre']}} </h3></li>
        </a>
        @endforeach
        </ul>      
    </div> 

    
</section>

@endsection