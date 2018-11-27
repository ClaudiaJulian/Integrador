
@extends('Template.Admin')

@section('content')

<section class="content" >
    <h1>Esta sección es Administrativa </h1>
    <h2 class="titulo">Productos</h2>
    
    <div class="index">          
          <p ><a class="links" href="/categoria">Por Categoria</a></p>    
          <p ><a class="links" href="/tipo">Por Tipo</a></p>
    </div>
    
    <div style="margin-top:20px;">
        <ul class="">             
        @foreach($productos as $produc)
        <li class="">  
            <a class="" href="producto/{{$produc['id']}}">
                <img src="{{ asset($produc->photo) }}"> 
                <h3> {{$produc['nombre']}} </h3>
                <h3> ${{$produc['precio']}} </h3>
                <button><a href="carro/add/{{$produc['id']}}">  Comprar </a></button>
                <h3><a class="" href="producto/{{ $produc['id'] }}/edit"> Editar </a></h3>
            </a>
        </li>     
        @endforeach
        </ul>      
    </div> 
    
</section>

@endsection