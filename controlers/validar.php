<?php
if(isset($_POST['dni'])){
    setcookie('dni', $_POST['dni'], time() + 18000,'/');
    setcookie('nombre', $_POST['nombre'], time() + 18000,'/');
    if(isset($_COOKIE['carrito'])){
        header('Location: inicio.php?configC=true');
    }else{
        header('Location: inicio.php');
    }
}

?>