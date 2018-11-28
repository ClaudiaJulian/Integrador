@extends('Template.Admin')

@section('content')

<section class="content" >
    <h1>Esta sección es Administrativa </h1>
    <h2 class="titulo">Categorias</h2>

    <div class="index">          
          <p ><a class="links" href="/producto">Todos los Productos</a></p>    
    </div>
    
    <div style="">
        <ul class="">             
        @foreach($categorias as $categ)

        <li class="">  
            <a class="" href="categoria/{{$categ['id']}}">
                <h3> {{$categ['nombre']}} </h3>
                <img style="width:30vw" src="{{ asset($categ->photo) }}">
                <h3><a class="" href="categoria/{{ $categ['id'] }}/edit"> Editar </a></h3> 
            </a>
        </li>
     
        @endforeach
        </ul>      
    </div> 

    
</section>

@endsection