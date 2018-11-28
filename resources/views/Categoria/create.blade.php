<!-- nobasic - DE ESTA VISTA SE ENCARGA CLAUDIA
ES ADMINISTRATIVA  -->

@extends('Template.Admin')

@section('content')

<section class="content">

<h1>Esta sección es Administrativa </h1>
<h2>Crear Categoria</h2>

<ul class="errors">
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>    
    @endforeach
</ul>

<form method="POST" id="nuevo" action="" name="nuevo" style="text-align: center;" enctype="multipart/form-data"> 
    @csrf  
    
        <label for="img">Foto</label>
        <input type="file" name="img" id="img" value="">
     
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="" >
   
    <button type="submit" name="button">Crear Categoria</button>
       
</form>

<div class="index">          
    <p><a class="links" href="/admin">Productos</a></p> 
</div>

</section>

<!-- <?php var_dump($_POST)?> -->
@endsection
