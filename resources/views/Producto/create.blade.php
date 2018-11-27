
@extends('Template.Admin')

@section('content')

<section>
<h1>Esta sección es Administrativa </h1>
<h2>Crear Producto</h2>

<ul class="errors">
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>    
@endforeach
</ul>

<form method="POST" id="nuevo" action="" name="nuevo" style="text-align: center;" enctype="multipart/form-data"> 
    @csrf  
    
    <label for="img">Foto</label>
    <input type="file" name="img" id="img" value="" >

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="" >

    <label for="marca">Marca</label>
    <input type="text" name="marca" id="marca" value="" >

    <label for="precio">Precio</label>
    <input type="number" name="precio" id="precio" value="">
    
    <label for="tipo_id">Tipo_Id</label>
    <input type="number" name="tipo_id" id="tipo_id" value="">

    <label for="stock">Stock</label>
    <input type="number" name="stock" id="stock" value="">

    <label for="oferta">Oferta</label>
    <input type="number" name="oferta" id="oferta" value="">
 
    <label for="qVentas">Cantidad Ventas</label>
    <input type="number" name="qVentas" id="qVentas" value=""><br><br>
    
    <div>
    <label for="categoria_id">Categorias</label><br>     
        @foreach($categorias as $cate)
        <input type="checkbox" name="categoria_id[]" id="categoria_id" value="{{ $cate['id'] }}">{{ $cate['nombre'] }}
        @endforeach      
    </div>
    
    <button type="submit" name="button">Create Product</button>
   
</form>

<div class="index">          
    <p><a class="links" href="/producto">Productos</a></p> 
    <p><a class="links" href="/tipo/create">Crear Tipos</a></p>
    <p><a class="links" href="/categoria/create">Crear Categorias</a></p>  
</div>

</section>

<!-- <?php var_dump($_POST)?> -->
@endsection