<div class="col-2 botonesIniciado sombra d-none d-lg-flex justify-content-around me-4">
<?php if($home=='carrito'){ echo '<a href="principal.php">Tienda</a>'; echo'<a href="inicio.php">Home</a>';} else if($home=='inicio') echo '<a href="principal.php">Tienda</a>';   else echo'<a href="inicio.php">Home</a>';?>
    <a href="inicio.php#informacion">Información</a>
</div>
<div class="col-1 ms-5 d-none d-lg-flex justify-content-end">
    <a href="cerrarsesion.php"><i class="bi bi-person-fill-slash sombra me-4  iconoPerfil" title="Cerrar sesión <?= $_COOKIE['nombre']?>"></i></a>
    <?php if(!isset($estoyEnCarrito)){ echo '<a href="vercarrito.php"><i class="bi sombra bi-cart3 iconoPerfil"></i></a>
        <span class="cantidad-en-icono sombra cantidadDeProductosCarrito rounded">0</span>'; }?>
    <div class="dropdown">
        <button class="idioma" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-translate iconoPerfil sombra"></i>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">🇪🇦Castellano</a></li>
            <li><a class="dropdown-item" href="#">🇬🇧Inglés</a></li>
            <li><a class="dropdown-item" href="#">🇩🇪Aleman</a></li>
        </ul>
    </div>
</div>