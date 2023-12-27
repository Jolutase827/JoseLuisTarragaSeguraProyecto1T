<?php
include("../config/functions.php");

if (isset($_COOKIE["dni"])&&isset($_COOKIE['nombre']))
$iniciado = true;
else{
$iniciado = false;
}

$home=3;

$productos = json_decode(file_get_contents("http://localhost/JoseLuisTarragaSeguraProyecto1T/APIProducto/productoService.php"));

include '../views/vistaProductos.php';


?>