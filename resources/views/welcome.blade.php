<!-- nobasic - ESTE SERIA NUESTRO HOME  -->
@extends('Template.basicClaudia')

@section('content')
<main>
    <!-- BANNER -->
    <section class="banner">
        <!-- <img src="imagenes/banner.png" alt="banner" class="fotobanner"> -->
        
        <div class="BannerInfo">
            <h1> Accesorios Urbanos Sporty & Tech </h1>
            <a href="shop.html">Shop now</a>
        </div>
    </section>
    <!-- FIN BANNER -->

    <section class="IntroText">
        <article>
            <h2>Inspirado Para Los Hombres</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat doloremque quos quam, delectus sed blanditiis.</p>
            <p class="lineatxt"></p>
        </article>
    </section>

    <!-- CATEGORIAS -->
    <section class="Categorias">
        @foreach($categoria as $cat)
        <article class="categbanner">
            <div class="imgc">
                <img class="ImgCateg" src="{{ asset($cat->photo) }}" alt="">
            </div>
            <div class="titulocateg">
                <p>{{$cat->nombre}}</p>
            </div>
        </article>
        @endforeach
    </section>

    <!-- SECCION SALE -->
    <section class="SeccionSale">
        <article class="SeccionIntro">
             <h2>Sale Last Minutes</h2>
            <span><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></span>
        </article>

        <article class="SeccionIntro SeccionIntro2">
            <div class="Horariotext">
                <div class="Horariotext2">
                    <p>15 hs</p>
                </div>
                <div class="Horariotext2">
                    <p>20 min</p>
                </div>
                <div class="Horariotext2">
                    <p>50 seg</p>
                </div>
            </div>

            <div class="botonSale">
                <a href="">Shop Now</a>
            </div>
        </article>
    </section>

    <section class="ContenidoSale">
        <article class="ImgSale">
            <img class="" src="/storage/img_banner/bannerSale.jpg" alt="HOLA">
            <div class="Descuentos">
                <p>30%</p>
                <p>40%</p>
                <p>50%</p>
            </div>
        </article>

        <div class="ProductosSale">

        @foreach($ofertas as $ofer)

            <article class="ProducS">
                <img src="{{ asset($ofer['photo']) }}"> 
                <div class="ProdDescrip">
            
                    <h3> {{ $ofer['marca'] }} </h3>
                    <p><span class="oldPrice">${{ $ofer['precio'] }}</span>  ${{ $ofer['precio'] * $ofer['oferta']/100 }}</p>    
                </div>
            </article>
        @endforeach
       
        </div>
    </section> 
                
        

    <!-- SECCION NEW PRODUCTS -->
    <section class="SeccionNew">
        <article class="SeccionIntroNew">
            <p>Only The Best</p>
            <h2>new accesories</h2>
        </article>

        <div class="ContenidoNew">
            <article class="ImgNew">
                <img src="/storage/img_banner/bannerNew.jpg" alt="">
                <article>
                    <a href="">More Products</a>               
                </article>
            </article>

            <div class="ProductosNew">

                @foreach($news as $new)
                <article class="ProducN">
                    <img src="{{ asset($new['photo']) }}" alt=""> 
                    <h3> {{ $new['marca'] }} </h3>
                    <p>${{ $new['precio'] }}</p>    
                </article>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- SECCION BEST SELLERS -->
    <section class="SeccionNew">
        <article class="SeccionIntroNew">
            <p>Only The Best</p>
            <h2>best sellers</h2>
        </article>
    
        <div class="ContenidoNew">
            <article class="ImgNew">
                <img src="/storage/img_banner/bannerBestS.jpg" alt="">
                <article>
                    <a href="">More Products</a>
                </article>
            </article>
        
            <div class="ProductosNew">
                @foreach($sellers as $sell)
                <article class="ProducN">
                    <img src="{{ asset($sell['photo']) }}" alt=""> 
                    <h3> {{ $sell['marca'] }} </h3>
                    <p>${{ $sell['precio'] }}</p>    
                </article>
                @endforeach                
            </div>
        </div>
    </section>

    <!-- BANNER PRODUCTS -->    
    <section class="BannerProduct">
        <article class="TextBP">
            <h2>You Style | Our Quality</h2>
            <p></p>
            <a href="">Show Now</a>
        </article>

        <div class="bannerOpacity"></div>
    </section>

    <!--  MARCAS  -->
    <section class="Marcas">
        <div class="LogosMarcas">
            <article><img src="imagenes/marcas/brand.png" alt=""></article>
            <article><img src="imagenes/marcas/brand2.png" alt=""></article>
            <article><img src="imagenes/marcas/brand3.png" alt=""></article>
            <article><img src="imagenes/marcas/brand4.png" alt=""></article>
            <article><img src="imagenes/marcas/brand5.png" alt=""></article>
        </div>   
    </section>

     <!-- MODO COMPRA -->
    <section class="ModoPago">
        <div class="ContCompra">
            <article class="IconCompra">
                <div><i class="fas fa-shipping-fast fa-3x"></i></div>
                <article class="InfoPago">
                    <h3>Envíos a todo el país</h3>
                    <p>Rápido y económico</p>
                </article>
            </article>
            <article class="IconCompra">
                <div><i class="far fa-credit-card fa-3x"></i></div>
                <article class="InfoPago">
                    <h3>Cuotas sin intereses</h3>
                    <p>Con todas las tarjetas de crédito</p>
                </article>
            </article>
            <article class="IconCompra">
                <div><i class="fas fa-sync-alt fa-3x"></i></div>
                <article class="InfoPago">
                    <h3>Cambios y Devolución</h3>
                    <p>30 dias de prueba</p>
                </article>
            </article>
        </div>
    </section>
</main>
    <footer>
        <h3>copyright</h3>

        <!-- Redes -->
        <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>Gmail</li>
        </ul>
    </footer>

    </body>
</html>
@endsection