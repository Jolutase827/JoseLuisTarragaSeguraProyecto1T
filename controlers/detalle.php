<?php
if (isset($_COOKIE["dni"])&&isset($_COOKIE['nombre']))
$iniciado = true;
else
$iniciado = false;

$home=3;

$producto = json_decode(file_get_contents("http://localhost/JoseLuisTarragaSeguraProyecto1T/APIProducto/productoService.php?id=".urldecode($_GET["id"])));

include("../views/detalle.php");
