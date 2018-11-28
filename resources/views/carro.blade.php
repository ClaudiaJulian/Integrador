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
    
    @foreach($carro as $car)

    <label for="tipo"></label>
    <input type="text" placeholder="Tipo" name="tipo" id="tipo" value="{{$car['tipo_id']}}" >

    <label for="nombre"></label>
    <input type="text" placeholder="Nombre" name="nombre" id="nombre" value="{{$car['nombre']}}" >

    <label for="precio"></label>
    <input type="number" placeholder="Precio" name="precio" id="precio" value="{{$car['precio']}}">
    
    <label for="cantidad"></label>
    <input type="number" placeholder="Cantidad" name="cantidad" id="cantidad" value="1">
 
    <label for="Monto"></label>
    <input type="number" placeholder="Monto" name="Monto" id="Monto" value="{{$car['nombre']}}">
    <br><br><br>
    @endforeach

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