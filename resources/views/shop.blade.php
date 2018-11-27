@extends('template.basic')

@section('content')
    <main class="Shop">
        <section class="BannerShop">
            <h1>Productos</h1>
        </section>
       
        <div class="ShopCont">
            <section class="">
                @foreach($categoria as $categ)
                    <article class="ShopTipos">    
                        <ul>
                            <li><a href="categoria/{{$categ['id']}}" style="width:15vw">{{$categ['nombre']}}</a></li>
                        </ul>                                             
                    </article>
                @endforeach  
                <h3>Tipos</h3>
                @foreach($tipo as $tip)
                    <article class="CategoriasN">
                          <li style="list-style: none"><a href="tipo/{{$tip['id']}}" style="width:15vw;text-decoration:none">{{$tip['nombre']}}</a></li>    
                    </article>
                @endforeach
            </section>

            <section class="ProductosN">
                @foreach($ofertas as $ofer)
                    <article class="ProducS">
                        <img src="{{ asset($ofer['photo']) }}"> 
                        <div class="ProdDescrip"> 
                            <h3> {{ $ofer['marca'] }} </h3>
                            <p><span class="oldPrice">${{ $ofer['precio'] }}</span>  ${{ $ofer['precio'] * $ofer['oferta']/100 }}</p>    
                        </div>
                    </article>
                @endforeach                            
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
</div>
@endsection
