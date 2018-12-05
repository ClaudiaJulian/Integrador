@extends('Template.basic')

@section('content')

    <main class="container">
    <!-- leyendaContactos -->
        <div class="CarroCompras">
        <span><h3>Carrito de compras</h3></span>
        <h4> Pedido de:  {{Auth::user()->name}}</h4>
                
            <form method="POST" id="nuevo" action="" name="nuevo" style="text-align: center;" enctype="multipart/form-data"> 
                    @csrf                      
               
               <!-- @foreach($arrayCarro as $producto)
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
                    
                </div>
                @endforeach -->
            <section class="VistaCompras">
                <table class="TablaCarro">
                <tr>                
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Unidad</th>
                    <th>Total</th>
                </tr>

                @foreach($arrayCarro as $producto)
                <tr class="FondoTablaProducto">                
                    <td>
                        <div class="InfoTabla">
                            <h3>{{$producto['nombre']}}</h3>
                            <p>{{$producto['marca']}}</p>
                            <a href="/carro/delete/{{$producto['id']}}">Borrar</a>
                        </div>
                    </td>
                    <td>{{$producto['precio']}}</td>
                    <td><input type="number" placeholder="cantidad"  name="cantidad" id="cantidad" value="{{$producto['cantidad']}}"></td>
                    <td>{{$producto['precio'] * $producto['cantidad'] }}</td>  
                </tr>
                @endforeach                  
                </table>
                           
                <article class="BtnVaciar"><a href="/carro/vaciar">Vaciar</a></article>
                
                <section class="CarroTotal">
                    <div class="InfoTotal">
                        <article>
                            <h3>Subtotal:</h3>
                            <p>{{$total}}</p>
                        </article>
                        <article>
                            <h3>Iva:</h3>
                            <p>{{$total * 21/100}}</p>
                        </article>
                        <article>
                            <h3>Total:</h3>
                            <p>{{$total * ( 1 + 21/100) }}</p>
                        </article>

                    </div>

                    <div class="BotonesTabla">
                    <article class="BtnPagar"><a href="/carro/pagar">Pagar</a></article>
                    <article class="BtnAgregar"><a href="/shop"> + Productos</a></article>
                    </div>    
                </section>
        </section>

                <!-- <br>
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
                <button type="submit" name="button"><a href="/carro/pagar">Pagar</a></button> -->
                    

        </div>


        <!-- // <div>
        //                     <img src="../image/imgtabla.jpg" alt="" style="heigth:300px">
        //                 </div> -->
    </main>


@endsection