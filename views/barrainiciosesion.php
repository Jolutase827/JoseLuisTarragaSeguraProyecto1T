<div class="col-2 botonesIniciado sombra d-none d-lg-flex justify-content-around me-4">
<?php if($home) echo '<a href="principal.php">Tienda</a>'; else echo'<a href="inicio.php">Home</a>';?>
    <a href="#informacion">Información</a>
</div>
<div class="col-1 sombra d-none d-lg-flex justify-content-end">
    <a href="cerrarsesion.php"><i class="bi bi-person-fill-slash  me-4  iconoPerfil" title="Cerrar sesión <?= $_COOKIE['nombre']?>"></i></a>
    <i class="bi bi-cart3 iconoPerfil"></i>
</div>