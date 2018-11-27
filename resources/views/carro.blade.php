<!-- nobasic - DE ESTA VISTA SE ENCARGA CLAUDIA
ES ADMINISTRATIVA  -->

@extends('Template.basic')

@section('content')
<ul class="errors">
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>    
@endforeach
</ul>

<section>
<form method="POST" id="nuevo" action="" name="nuevo" style="text-align: center;" enctype="multipart/form-data"> 
    @csrf
    
    
    <label for="tipo"></label>
    <input type="text" placeholder="Tipo" name="tipo" id="tipo" value="" >

    <label for="nombre"></label>
    <input type="text" placeholder="Nombre" name="nombre" id="nombre" value="" >

    <label for="precio"></label>
    <input type="number" placeholder="Precio" name="precio" id="precio" value="">
    
    <label for="cantidad"></label>
    <input type="number" placeholder="Cantidad" name="cantidad" id="cantidad" value="">
 
    <label for="Monto"></label>
    <input type="number" placeholder="Monto" name="Monto" id="Monto" value="">
    <br><br><br>
    <label for="Total">Total</label>
    <input type="number" name="Total" id="Total" value="">
     
    <div>
    <button><a href="/producto" name="agregar">Agregar Más Productos</a></button>
    <button><a href="/producto" name="agregar">Vaciar Carro</a></button>
    </div>
    
    <button type="submit" name="button">Pagar</button>
   
</form>

<div class="index">
        <p ><a class="links" href="/producto">Productos</a></p>          
</div>

</section>

<!-- <?php var_dump($_POST)?> -->
@endsection