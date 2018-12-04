@extends('Template.basic')

@section('content')

    <main class="container">
        <div class="leyendaContactos">
                <form method="POST" id="nuevo" action="" name="nuevo" style="text-align: center;" enctype="multipart/form-data"> 
                    @csrf  
                <h4> Este es el pedido de:  {{Auth::user()->name}} <h4>    
               
               @foreach($arrayCarro as $producto)
                <div>    
                    <label for="nombre"></label>
                    <input type="" placeholder="nombre" name="nombre" id="nombre" value="{{$producto['nombre']}}" >

                    <label for="marca"></label>
                    <input type="text" placeholder="marca" name="marca" id="marca" value="{{$producto['marca']}}" >

                    <label for="precio"></label>
                    <input type="number" placeholder="precio" name="precio" id="precio" value="{{$producto['precio']}}">
    
                    <label for="cantidad"></label>
                    <input type="number" placeholder="cantidad"  name="cantidad" id="cantidad" value="{{$producto['cantidad']}}">
                    {{-- <button type="submit" name="button"><a href="/carro/cantidad/{{$producto['id']}}">Cambiar</a></button> --}}

                    <label for="monto"></label>
                    <input type="number" placeholder="monto" name="monto" id="monto" value="{{$producto['precio'] * $producto['cantidad'] }}">
                    
                    <button type="submit" name="button"><a href="/carro/delete/{{$producto['id']}}">X</a></button>
                
                <div>
                @endforeach
                
                <br>
                <label for="total">Subtotal</label>
                <input type="number" name="total" id="total" value="{{$total}}">                
                <br>
                <label for="total">Iva</label>
                <input type="number" name="total" id="total" value="{{$total * 21/100}}">                
                <br>
                <label for="total">Total</label>
                <input type="number" name="total" id="total" value="{{$total * ( 1 + 21/100) }}">             
                <br>
                <br>

                <button type="submit" name="button"><a href="/shop"> + Productos</a></button>    
                <button type="submit" name="button"><a href="/carro/vaciar">Vaciar</a></button>
                <button type="submit" name="button"><a href="/carro/pagar">Pagar</a></button>
                    

        </div>
    </main>


@endsection