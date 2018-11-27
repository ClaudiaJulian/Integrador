
@extends('Template.Admin')

@section('content')

<section class="content">
<h1>Esta sección es Administrativa </h1>
<ul class="errors">
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>    
    @endforeach
</ul>

<form method="POST" id="nuevo" action="" name="nuevo" style="text-align: center;" enctype="multipart/form-data"> 
    @csrf
    @method('put')   
    <label for="img"></label>
    <img src="{{asset($tipo->photo) }}">
    <input type="file" name="img" id="img" value="">
    
    <br><br>
    
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$tipo->nombre}}" >        
    
    <button type="submit" name="button">Editar Tipo</button>       
</form>

<div class="index">          
          <p ><a class="links" href="/tipo">Tipos</a></p>    
</div>

</section>

<!-- <?php var_dump($_POST)?> -->
@endsection
