<!-- nobasic - ARCHIVO DE TRABAJO DE CLAUDIA  -->

<!-- nobasic - AREA DE TRABAJO DE CLAUDIA  -->

@extends('Template.basicClaudia')

@section('content')

<section class="content" >
    <h2 class="titulo">Categorias</h2>

    <div class="index">          
          <p ><a class="links" href="/producto">Todos los Productos</a></p>    
          <p ><a class="links" href="/tipo">Por Tipo</a></p>
    </div>
    
    <div style="">
        <ul class="">             
        @foreach($categorias as $categ)

        <li class="">  
            <a class="" href="categoria/{{$categ['id']}}">
                <h3> {{$categ['nombre']}} </h3>
                <img src="{{ asset($categ->photo) }}">
                <h3><a class="" href="categoria/{{ $categ['id'] }}/edit"> Editar </a></h3> 
            </a>
        </li>
     
        @endforeach
        </ul>      
    </div> 

    
</section>

@endsection