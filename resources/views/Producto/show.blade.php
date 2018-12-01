@extends('template.basic')

@section('content')
    <main class="Shop">
        <section class="BannerShop">
            <h1>Productos</h1>
        </section>
       
        <div class="ShopCont">
            <div class="TablaProductos">

            <section class="ListTipos">
                <article class="ShopTipos">
                    <ul>
                       <li><a href="/producto">Todos</a></li>
                    </ul> 
                </article> 

                @foreach($categorias as $cat)
                    <article class="ShopTipos">    
                        <ul>
                            <li><a href="../categoria/{{$cat['id']}}">{{$cat['nombre']}}</a></li>
                        </ul>                                             
                    </article>
                @endforeach 
            </section>

            <section class="SeleccionProducto"> 
                    <article class="SeleccionText">
                        <i class="far fa-clock fa-2x"></i>
                        <a href="/producto/filtro/ofertas">Last Minutes</a>
                    </article>
                    
                    <article class="SeleccionText">
                    <i class="far fa-grin-stars fa-2x"></i>
                            <a href="/producto/filtro/news">New Accesories</a>
                    </article>
                    
                    <article class="SeleccionText">
                    <i class="far fa-star fa-2x"></i>
                        <span><a href="/producto/filtro/sellers">Best Sellers</a></span>
                    </article>                
            </section>

            <section class="TiposAccesorios">
                <h3>Tipos</h3>
                @foreach($tipo as $tip)
                    <article class="TiposText">
                          <li style="list-style: none"><a href="../tipo/{{$tip['id']}}">{{$tip['nombre']}}</a></li>    
                    </article>
                @endforeach
            </section>
        </div>
        
            <section class="ProductosN ProductosSh">  
                <article class="ProducS ProducS2 ProductosOne">            
                    <img src="{{ asset($producto['photo']) }}">
                    <div class="ProdDescrip">
                        <h3> {{ $producto['nombre'] ." - ". $producto->tipo->nombre }} </h3>
                        <h3> {{ $producto['marca'] }} </h3>
                        <h3> ${{ $producto['precio']* (1 - $producto['oferta']/100) }} </h3>
                        <a href="../carro/add/{{$producto['id']}}">Comprar</a>
                    </div>    
                </article>
            </section> 
        </div>   
</main>
<footer>
    <h3>copyright</h3>

    <!-- Redes -->
    <ul>
        <li>Facebook</li>
        <li>Twitter</li>
        <li>Instagram</li>
        <li>Gmail</li>
    </ul>
</footer>
@endsection
