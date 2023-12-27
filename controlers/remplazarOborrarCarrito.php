<?php

if(isset($_GET["idUnico"])){
    setcookie("carrito", '', time() - 18000,"/");
    setcookie("carrito", $_GET["idUnico"], time()+ 18000,"/");
}else{
    setcookie("carrito", '', time() - 18000,"/");
}
header('Location: inicio.php');