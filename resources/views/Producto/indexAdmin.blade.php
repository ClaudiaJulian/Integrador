@extends('template.Admin')

@section('content')
    <main class="Shop">
        <section class="BannerShop">
            <h1>Administración</h1>
        </section>

        <div class="ShopCont">
            <section class="">
                    <article class="CategoriasN">
                        <ul>
                            <li><a class="" href="producto/create"> Agregar Producto </a></li>            
                            <li><a href="" style="width:15vw">Todos</a></li>
                        </ul>                           
                    </article> 

                @foreach($categorias as $cat)
                    <article class="ShopTipos">    
                        <ul>
                            <li><a href="../admin/categoria/{{$cat['id']}}" style="width:15vw">{{$cat['nombre']}}</a></li>
                            <div>
                                <button><a class="" href="/{{ $cat['id'] }}/edit"> C </a></button>
                                <button><a class="" href="../categoria/{{ $cat['id'] }}/delete"> X </a></button>
                            </div>
                        </ul>                                             
                    </article>
                @endforeach 
                    <article class="ShopTipos">
                        <ul>
                            <li><a  href="categoria/create"> Agregar Categoria </a></li> 
                       
                        </ul>              
                    </article>

                <h3>Tipos</h3>
                @foreach($tipo as $tip)
                    <article class="CategoriasN">
                          <li style="list-style: none"><a href="../admin/tipo/{{$tip['id']}}" style="width:15vw;text-decoration:none">{{$tip['nombre']}}</a></li>    
                          <div>
                            <button><a class="" href="tipo/{{ $tip['id'] }}/edit"> C </a></button>
                            <button><a class="" href="tipo/{{ $tip['id'] }}/delete"> X </a></button>
                        </div>
                          
                    </article>
                @endforeach
                <div>
                    <h4><a class="" href="tipo/create"> Agregar Tipos </a></h4>            
                </div>
            </section>

            <section class="ProductosN">       
             @foreach($productos as $produc)
                <article class="ProducS">   
                    <a class="" href="producto/{{ $produc['id'] }}/edit">
                     <img src="{{ asset($produc->photo) }}">
                    </a>  
                    <h3> {{$produc['nombre']}} </h3>
                    <h3> ${{$produc['precio']}} </h3>
                
                    <div>
                        <h4><a class="" href="producto/{{ $produc['id'] }}/edit"> Editar </a></h4>
                        <h4><a class="" href="producto/{{ $produc['id'] }}/delete"> Eliminar </a></h4>
                    </div>    
                </article>      
            @endforeach
            </section>
         
    
</main>
@endsection