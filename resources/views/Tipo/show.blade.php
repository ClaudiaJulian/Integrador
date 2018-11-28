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
                @foreach($tipos as $tip)
                    <article class="CategoriasN">
                          <li style="list-style: none"><a href="../tipo/{{$tip['id']}}" style="width:15vw;text-decoration:none">{{$tip['nombre']}}</a></li>    
                    </article>
                @endforeach
            </section>

    <section class="ProductosN">
    @foreach($tipo->producto as $produc)
        <article class="ProducS">              
           <a href="../producto/{{$produc['id']}}"><img src="{{ asset($produc['photo']) }}"></a> 
            <div class="ProdDescrip">
                <h3> {{ $produc['nombre'] ." - ". $produc->tipo->nombre }} </h3>
                <h3> {{ $produc['marca'] }} </li>
                <p><span> ${{ $produc['precio'] }} </p></span>
                <button type="submit">Comprar</button>        
            </div>
        </article>
    @endforeach
    </section>

    
</section>

@endsection