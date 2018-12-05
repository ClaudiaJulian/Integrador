@extends('Template.basic')

@section('content')

    <main class="container">
    <!-- leyendaContactos -->
        <div class="CarroCompras">
        <span><h3>Carrito de compras</h3></span>
        <h4> Pedido de:  {{Auth::user()->name}}</h4>
                
            <section class="VistaCompras">
                <table class="TablaCarro">
                <tr>                
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Unidad</th>
                    <th>Total</th>
                </tr>

                @foreach($arrayCarro as $producto)
                <tr class="FondoTablaProducto" style="text-align:center">                
                    {{-- <td>
                            <img width="20px" src="{{ asset($producto['photo']) }}">
                    </td> --}}
                    <td>
                        <div class="InfoTabla">
                           
                            <h3>{{$producto['nombre']}}</h3>
                            <p>{{$producto['marca']}}</p>
                            <a href="/carro/delete/{{$producto['id']}}">Borrar</a>
                        </div>
                    </td>
                    <td>$ {{$producto['precio']}}</td>
                    <td> 
                        <form method="POST" id="nuevo" action="/carro/actualizar/{{$producto['id']}}" name="nuevo" style="" enctype="multipart/form-data"> 
                            @csrf
                            {{-- @method('put') --}}
                            <input type="number" placeholder="cantidad"  name="cantidad" id="cantidad" value="{{$producto['cantidad']}}">
                        <div><button style="display:inline-block; padding: 6px 10px; margin-top:20px; background-color:white; color:cadetblue" href="">Actualizar</button></div>
                        </form>
                    </td>
                    <td>$ {{$producto['precio'] * $producto['cantidad'] }}</td>  
                </tr>
                @endforeach                  
                </table>
                           
                <article class="BtnVaciar"><a href="/carro/vaciar">Vaciar</a></article>
                
                <section class="CarroTotal">
                    <div class="InfoTotal">
                        <article>
                            <h3>Subtotal:</h3>
                            <p>$ {{$superTotal}}</p>
                        </article>
                        <article>
                            <h3>Iva:</h3>
                            <p>$ {{$superTotal * 21/100}}</p>
                        </article>
                        <article>
                            <h3>Total:</h3>
                            <p>$ {{$superTotal * ( 1 + 21/100) }}</p>
                        </article>

                    </div>

                    <div class="BotonesTabla">
                    <article class="BtnPagar"><a href="/carro/pagar">Pagar</a></article>
                    <article class="BtnAgregar"><a href="/shop"> + Productos</a></article>
                    </div>    
                </section>
        </section>

                
        </div>

    </main>


@endsection