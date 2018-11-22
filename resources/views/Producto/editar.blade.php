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
 
    <label for="qVentas">Cantidad Ventas</label>
    <input type="number" name="qVentas" id="qVentas" value="{{ $producto->qVentas }}"><br><br>
    
    <div>
    <label for="categoria_id">Categorias</label><br>     
    @foreach($categorias as $cate)
        <input type="checkbox" name="categoria_id[]" id="categoria_id" value="{{ $cate['id'] }}">{{ $cate['nombre'] }}
        @endforeach       
    </div>
    
    <button type="submit" name="button">Editar Producto</button>
   
</form>

<div class="index">          
          <p ><a class="links" href="/categoria">Categorias</a></p>    
</div>

</section>

<!-- <?php var_dump($_POST)?> -->
@endsection