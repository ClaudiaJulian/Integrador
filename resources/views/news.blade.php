@extends('Template.basicClaudia')

@section('content')

<section class="content" >
    <h2 class="titulo">Productos</h2>
  
    <div class="index">          
          <p ><a class="links" href="/categoria">Por Categoria</a></p>    
          <p ><a class="links" href="/tipo">Por Tipo</a></p>
    </div>
    <h2 class="titulo">News</h2>
    <div style="margin-top:20px;">
        <ul class="">             
        
        @foreach($news as $new)
        <li class="">  
            <a class="" href="">
                <img src="{{ asset($new->photo) }}"> 
                <h3> {{$new['nombre']}} </h3>
                <h3> ${{$new['precio']}} </h3>
                <button type="submit"> Comprar </button>
            </a>
        </li>     
        @endforeach
        </ul>      
    </div> 
    <h2 class="titulo">Sellers</h2>
    <div style="margin-top:20px;">
        <ul class="">             
        
        @foreach($sellers as $sell)
        <li class="">  
            <a class="" href="">
                <img src="{{ asset($sell->photo) }}"> 
                <h3> {{$sell['nombre']}} </h3>
                <h3> ${{$sell['precio']}} </h3>
                <button type="submit"> Comprar </button>
            </a>
        </li>     
        @endforeach
        </ul>      
    </div>
    <h2 class="titulo">Ofertas</h2>
    <div style="margin-top:20px;">
        <ul class="">             
        
        @foreach($ofertas as $ofer)
        <li class="">  
            <a class="" href="">
                <img src="{{ asset($ofer->photo) }}"> 
                <h3> {{$ofer['nombre']}} </h3>
                <h3> ${{$ofer['precio']}} </h3>
                <h3> Desc. {{$ofer['oferta']}}% </h3>
                <button type="submit"> Comprar </button>
            </a>
        </li>     
        @endforeach
        </ul>      
    </div> 
</section>

@endsection