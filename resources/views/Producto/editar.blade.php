@extends('template.Admin')

@section('content')
    <main class="Shop">
        <section class="BannerShop">
            <h1>Administración</h1>
        </section>

        <div class="ShopCont">
            <section class="AdmColumna">
                    <article class="ShopTipos">
                            <ul><li><a style="width:20vw">E - Editar   X - Eliminar</a></ul></li>
                    </article>
                    <article class="ShopProductos">
                        <ul>
                            <li><a class="" href="../../producto/create" style="width:20vw"> + Producto </a></li>            
                            <li><a href="../../admin" style="width:15vw">Todos</a></li>
                        </ul>                           
                    </article> 
                    <article class="ShopTipos"> 
                     @foreach($categorias as $cat) 
                        <ul>
                            <li><a href="../../admin/categoria/{{$cat['id']}}" style="width:15vw">{{$cat['nombre']}}</li>
                            <div class="BotonCX">    
                                <button ><a class="" href="../../categoria/{{ $cat['id'] }}/edit"> E </a></button>
                                <button ><a class="" href="../../categoria/{{ $cat['id'] }}/delete"> X </a></button>
                            </div>
                        </ul>                                             
                    @endforeach 
                        <ul>
                            <li><a  href="../../categoria/create" style="width:20vw"> + Categoria </a></li>    
                        </ul>              
                    </article>

                    <article class="ShopItems">
                    @foreach($tipo as $tip)
                        <ul style="list-style: none">
                            <li><a href="../../admin/tipo/{{$tip['id']}}" style="width:15vw;text-decoration:none">{{$tip['nombre']}}</a></li>    
                            <div class="BotonCX">
                            <button><a class="" href="../../tipo/{{ $tip['id'] }}/edit"> E </a></button>
                            <button><a class="" href="../../tipo/{{ $tip['id'] }}/delete"> X </a></button>
                            <div>
                        </ul>
                    @endforeach    
                        <ul>
                            <li><a  href="../../tipo/create" style="width:20vw"> + Tipos </a></li>            
                        </ul>
                    </article>
            </section>

            <section class="FormCreate">

                <ul class="errors">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>    
                    @endforeach
                </ul>
                <article class="FormCreate"> 
                        <h3>Editar Producto</h3>
                        <p>En caso de incorporar Oferta, rellenar el descuento sin el símbolo %.
                            Por ejemplo, 50 para indicar 50% de descuento.
                        </p>
                        <br>


                <form method="POST" id="nuevo" action="" name="nuevo" style="text-align: center;" enctype="multipart/form-data"> 
                    @csrf
                    @method('put')  
    
                    <label for="img"></label>
                    <img src="{{asset($producto->photo) }}">
                    <input type="file" name="img" id="img" value="">
                    <br><br>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" >

                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" value="{{ $producto->marca }}" >

                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" value="{{ $producto->precio }}">
    
                    <label for="tipo_id">Tipo_Id</label>
                    <input type="number" name="tipo_id" id="tipo_id" value="{{ $producto->tipo_id }}">
 
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" id="stock" value="{{ $producto->stock }}">

                    <label for="oferta">Oferta</label>
                    <input type="number" name="oferta" id="oferta" value="{{ $producto->oferta }}">
    
                    <label for="qVentas">Cantidad Ventas</label>
                    <input type="number" name="qVentas" id="qVentas" value="{{ $producto->qVentas }}"><br><br>
    
                    <div>
                    <label for="categoria_id">Categorias</label><br>     
                    @foreach($categorias as $cate)
                    <input type="checkbox" name="categoria_id[]" id="categoria_id" value="{{ $cate['id'] }}">{{ $cate['nombre'] }}
                    @endforeach       
                    </div>
    
                    <button type="submit" name="button">Editar Producto</button>
    
                    @foreach($tipo as $tip)
                        <article class="ShopItems">
                            <div style="list-style: none">
                                <p>Tipo {{ $tip['id'] }}: {{ $tip['nombre'] }} </p>    
                            </div>
                        </article>
                    @endforeach

        </form>
    </article>
</section>

 

</main>

<!-- <?php var_dump($_POST)?> -->
@endsection