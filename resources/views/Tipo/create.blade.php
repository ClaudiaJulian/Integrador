
@extends('Template.Admin')

@section('content')

<section class="content">
<h1>Esta sección es Administrativa </h1>
<h2>Crear Tipo</h2>

<ul class="errors">
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>    
@endforeach
</ul>

<form method="POST" id="nuevo" action="" name="nuevo" style="text-align: center;" enctype="multipart/form-data"> 
    @csrf  
    
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="" >
        
    <label for="img">Foto</label>
    <input type="file" name="img" id="img" value="">

    <button type="submit" name="button">Crear Tipo</button>
       
</form>

<div class="">          
    <p><a class="links" href="/tipo">Tipos</a></p> 
    <p><a class="links" href="/producto/create">Crear Productos</a></p>
    <p><a class="links" href="/categoria/create">Crear Categorias</a></p>  
</div>

</section>

<!-- <?php var_dump($_POST)?> -->
@endsection
