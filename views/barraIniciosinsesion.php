<div class="col-3 botones sombra d-none d-lg-flex">

    <?php if($home=='inicio'||$home=="carrito"){
       echo '<a href="principal.php">Tienda</a>'; 
    }else if($home==3){ 
        echo'<a href="inicio.php">Home</a>';
    }?>
    <a href="inicio.php#informacion">Información</a>
    <a href="registrarse.php">Registrarse</a>
    <button id="inicioSesion" class="inicio col-4 ">Iniciar Sesión</button> 

</div>
<div class="col-2  sombra d-none d-lg-flex justify-content-center">
<?php if(!isset($estoyEnCarrito)){ echo '<a href="vercarrito.php"><i class="bi bi-cart3 iconoPerfil"></i></a>
        <span class="cantidad-en-icono cantidadDeProductosCarrito rounded">0</span>'; }?>
        <button class="idioma" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-translate iconoPerfil sombra"></i>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">🇪🇦Castellano</a></li>
            <li><a class="dropdown-item" href="#">🇬🇧Inglés</a></li>
            <li><a class="dropdown-item" href="#">🇩🇪Aleman</a></li>
        </ul>
</div>