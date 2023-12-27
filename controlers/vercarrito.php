<?php

if (isset($_GET['idUnicoAPoner'])) {
    if ($_GET['idUnicoAPoner'] != 'null') {
        $idUnico = $_GET['idUnicoAPoner'];
        setcookie('carrito', $idUnico, time() + 18000, '/');
    } else {
        $idUnico = uniqid();
        setcookie('carrito', $idUnico, time() + 18000, '/');
    }
    if (!isset($_GET['id'])) {
        header('Location: vercarrito.php');
    }else{
        include('../views/carrito.php');
    }
} else {
    if (isset($_COOKIE["dni"]) && isset($_COOKIE['nombre']))
        $iniciado = true;
    else
        $iniciado = false;

    $home = 'carrito';
    $estoyEnCarrito = true;
    if (!isset($_COOKIE['carrito'])) {
        if ($iniciado) {
            if (!isset($_GET['id'])) {
                include('../views/buscaridUnicoDeDni.php');
            } else {
                include('../views/buscaridUnicoDeDni.php');
            }
        } else {
            $idUnico = uniqid();
            setcookie('carrito', $idUnico, time() + 18000, '/');
            if (!isset($_GET['id'])) {
                header('Location: vercarrito.php');
            } else {
                include('../views/carrito.php');
            }
        }
    } else {
        $idUnico = $_COOKIE['carrito'];

        include('../views/carrito.php');
    }
}
