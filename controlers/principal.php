<?php
if (isset($_COOKIE["dni"])&&isset($_COOKIE['nombre']))
$iniciado = true;
else
$iniciado = false;

$home=false;

include '../views/vistaProductos.php';


?>