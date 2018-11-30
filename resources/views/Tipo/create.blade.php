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
                            <li><a class="" href="../producto/create" style="width:20vw"> + Producto </a></li>            
                            <li><a href="../admin" style="width:15vw">Todos</a></li>
                        </ul>                           
                    </article> 
                    <article class="ShopTipos"> 
                    @foreach($categorias as $cat)   
                        <ul>
                            <li><a href="../admin/categoria/{{$cat['id']}}" style="width:15vw">{{$cat['nombre']}}</li>
                            <div class="BotonCX">    
                                <button ><a class="" href="../categoria/{{ $cat['id'] }}/edit"> E </a></button>
                                <button ><a class="" href="../categoria/{{ $cat['id'] }}/delete"> X </a></button>
                            </div>
                        </ul>                                            
                    @endforeach 
                        <ul>
                            <li><a  href="../categoria/create" style="width:20vw"> + Categoria </a></li> 
                        </ul>              
                    </article>

                    <article class="ShopItems">
                    @foreach($tipo as $tip)
                        <ul style="list-style: none">
                            <li><a href="../admin/tipo/{{$tip['id']}}" style="width:15vw;text-decoration:none">{{$tip['nombre']}}</a></li>    
                            <div class="BotonCX">
                            <button><a class="" href="../tipo/{{ $tip['id'] }}/edit"> E </a></button>
                            <button><a class="" href="../tipo/{{ $tip['id'] }}/delete"> X </a></button>
                            <div>
                        </ul>
                    @endforeach
                        <ul>
                            <li><a  href="../tipo/create" style="width:20vw"> + Tipos </a></li>            
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
                    <h3>Crear Tipo</h3>
                    <p> Al incorporar un tipo se agrega automáticamente a las vistas.</p><br>


                    <form method="POST" id="nuevo" action="" name="nuevo" style="text-align: center;" enctype="multipart/form-data"> 
                    @csrf  
    
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="" >
        
                    <label for="img">Foto</label>
                    <input type="file" name="img" id="img" value="">

                    <button type="submit" name="button">Crear Tipo</button>
       
                    </form>
                </article>
            </section>

</div> 

</main>

<!-- <?php var_dump($_POST)?> -->
@endsection