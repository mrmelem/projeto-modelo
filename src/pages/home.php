<?php


$render = new views\View;


?>




<h1>Home</h1>

<nav>
    <p class="products">" Products | "<i class="fas fa-tshirt"></i></p>
    <p class="checkout">" Carrinho | "<i class="fas fa-shopping-bag"></i></p>
</nav>


<div class="icon_instagram">
    <a href="https://instagram.com/jessica_d.luxe?igshid=1dv04yfs6j0sa">
        <?php $render->svg("insta") ?>
    </a>
</div>

<div class="iconwpp">
    <a href="https://api.whatsapp.com/send?phone=+5591985686508">
        <?php $render->svg("wpp") ?>
    </a>
</div>

<div class="focus" style="display: none;">
    <div class="overlay"></div>
    <div class="box-focus">
        <div class="image">
            <img>
        </div>
    </div>
</div>


<div class="alert-box"></div>
<section class="main">
    <div class="banner-principal">
    <!-- colocar banner principal -->
        <img src="" alt="">
    </div>

    <div class="catalogo">
        <div class="header">
            <h1>Catálogo</h1>
        </div>
        <div class="body">
            <div class="container"></div>
        </div>
    </div>
</section>


