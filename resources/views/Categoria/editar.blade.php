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
    @method('put')   
    
    <label for="img"></label>
    <img src="{{asset($categoria->photo) }}">
    <input type="file" name="img" id="img" value="">

    <br><br>
    
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}" >    
    
    <button type="submit" name="button">Editar Categoria</button>
       
</form>

<div class="index">          
          <p ><a class="links" href="/categoria">Categorias</a></p>    
    
</div>

</section>

<!-- <?php var_dump($_POST)?> -->
@endsection