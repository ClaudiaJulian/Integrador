@extends('template.basic')

@section('content')
    <main class="Shop">
        <section class="BannerShop">
            <h1>Productos</h1>
        </section>
       
        <div class="ShopCont">
            <section class="">
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
            @foreach($categoria->producto as $produc)
            <article class="ProducS">  
                <img src="{{ asset($produc['photo']) }}"> 
                <div class="ProdDescrip"> 
                    <h3 style=""> {{ $produc['nombre'] }} </h3>
                    <h3 style=""> {{ $produc['marca'] }} </h3>
                    <p><span> ${{ $produc['precio'] }} </span></p>
                    <button type="submit">Comprar</button>
                </div>
            </article>
            @endforeach
            </section>
    
    </div> 

    
</section>

@endsection