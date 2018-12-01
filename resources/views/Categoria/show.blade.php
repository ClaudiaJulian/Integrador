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
                    <a href="../producto/filtro/ofertas">Last Minutes</a>
                </article>
                
                <article class="SeleccionText">
                <i class="far fa-grin-stars fa-2x"></i>
                        <a href="../producto/filtro/ofertas">New Accesories</a>
                </article>
                
                <article class="SeleccionText">
                <i class="far fa-star fa-2x"></i>
                    <span><a href="../producto/filtro/ofertas">Best Sellers</a></span>
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
            @foreach($categoria->producto as $produc)
            <article class="ProducS ProducS2">  
                <a href="../producto/{{$produc['id']}}"><img src="{{ asset($produc['photo']) }}"></a> 
                <div class="ProdDescrip"> 
                    <h3> {{ $produc['nombre'] }} </h3>
                    <h3> {{ $produc['marca'] }} </h3>
                    <p><span> ${{ $produc['precio'] * (1 - $produc['oferta']/100) }} </span></p>
                    <a href="../carro/add/{{$produc['id']}}">Comprar </a>
                </div>
            </article>
            @endforeach
            </section>
    
    </div> 

    
</section>
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