<!-- nobasic - DE ESTA VISTA SE ENCARGA CLAUDIA
ES ADMINISTRATIVA  -->

@extends('Template.basicClaudia')

@section('content')

<section class="content">

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

    <button type="submit" name="button">Crear Categoria</button>
       
</form>

<div class="index">          
          <p ><a class="links" href="/productos">Productos</a></p>    
    
</div>

</section>

<!-- <?php var_dump($_POST)?> -->
@endsection
