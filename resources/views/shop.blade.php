@extends('template.basicClaudia')

@section('content')
    <main class="Shop">
        <section class="BannerShop">
            <h1>Productos</h1>
        </section>
        
		<!-- <div class="leyendaShop">
		<p class="leyenda1"> Próximamente todos tus Accesorios </p>
        </div> -->
        
        <div class="ShopCont">
            <section class="">
                <article class="ShopTipos">
                    <ul>
                        <li><a href="">Urban</a></li>
                        <li><a href="">Sporty</a></li>
                        <li><a href="">Tech</a></li>
                    </ul>
                </article>

                <article class="CategoriasN">
                    <h3>Categorias</h3>
                    <a href="">Gorras</a>
                    <a href="">Camaras</a>
                    <a href="">mochilas</a>
                </article>
            </section>

            <section class="ProductosN">
                <article class="ProducS">
                    <img src="imagenes/imgnone.jpg" alt="">

                    <div class="ProdDescrip">
                        <h3>Producto</h3>
                        <p><span class="oldPrice">$900</span>$700</p>
                    </div>
                </article>
                <article class="ProducS">
                    <img src="imagenes/imgnone.jpg" alt="">

                    <div class="ProdDescrip">
                        <h3>Producto</h3>
                        <p><span class="oldPrice">$900</span>$700</p>
                    </div>
                </article>
                <article class="ProducS">
                    <img src="imagenes/imgnone.jpg" alt="">

                    <div class="ProdDescrip">
                        <h3>Producto</h3>
                        <p><span class="oldPrice">$900</span>$700</p>
                    </div>
                </article>
                <article class="ProducS">
                    <img src="imagenes/imgnone.jpg" alt="">

                    <div class="ProdDescrip">
                        <h3>Producto</h3>
                        <p><span class="oldPrice">$900</span>$700</p>
                    </div>
                </article>
                <article class="ProducS">
                    <img src="imagenes/imgnone.jpg" alt="">

                    <div class="ProdDescrip">
                        <h3>Producto</h3>
                        <p><span class="oldPrice">$900</span>$700</p>
                    </div>
                </article>
                <article class="ProducS">
                    <img src="imagenes/imgnone.jpg" alt="">

                    <div class="ProdDescrip">
                        <h3>Producto</h3>
                        <p><span class="oldPrice">$900</span>$700</p>
                    </div>
                </article>
            </section>
        </div>

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
</div>
@endsection
