<!-- nobasic - DE ESTA VISTA SE ENCARGA CLAUDIA
ES ADMINISTRATIVA  -->

@extends('Template.basicClaudia')

@section('content')

<ul class="errors">
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>    
@endforeach
</ul>

<section>
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
 
    <label for="qVentas">Cantidad Ventas</label>
    <input type="number" name="qVentas" id="qVentas" value=""><br><br>
    
    <div>
    <label for="categoria_id">Categorias</label><br>     
    <input type="checkbox" name="categoria_id" id="categoria_id" value="1">Urbano
    <input type="checkbox" name="categoria_id" id="categoria_id" value="2">Sporty
    <input type="checkbox" name="categoria_id" id="categoria_id" value="3">Tech       
    </div>
    
    <button type="submit" name="button">Create Product</button>
   
</form>

<div class="index">          
          <p ><a class="links" href="/categoria">Categorias</a></p>    
</div>

</section>

<!-- <?php var_dump($_POST)?> -->
@endsection