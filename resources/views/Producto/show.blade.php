@extends('template.basic')

@section('content')
    <main class="Shop">
        <section class="BannerShop">
            <h1>Productos</h1>
        </section>
       
        <div class="ShopCont">
            <section class="">
                <article class="ShopTipos">
                    <ul>
                       <li><a href="/producto" style="width:15vw">Todos</a></li>
                    </ul> 
                </article> 
                @foreach($categorias as $cat)
                    <article class="ShopTipos">    
                        <ul>
                            <li><a href="../categoria/{{$cat['id']}}" style="width:15vw">{{$cat['nombre']}}</a></li>
                        </ul>                                             
                    </article>
                @endforeach  
                <h3>Tipos</h3>
                @foreach($tipo as $tip)
                    <article class="CategoriasN">
                          <li style="list-style: none"><a href="../tipo/{{$tip['id']}}" style="width:15vw;text-decoration:none">{{$tip['nombre']}}</a></li>    
                    </article>
                @endforeach
            </section>
        
            <section class="ProductosN">  
                <article class="ProducS">            
                    <img src="{{ asset($producto['photo']) }}"> 
                    <h3> {{ $producto['nombre'] ." - ". $producto->tipo->nombre }} </h3>
                    <h3> {{ $producto['marca'] }} </h3>
                    <h3> ${{ $producto['precio'] }} </h3>
                 <button type="submit"><a href="carro/{{ $producto->slug}}">Comprar</a></button>        
                </article>
            </section> 
        </div>   
</main>
@endsection