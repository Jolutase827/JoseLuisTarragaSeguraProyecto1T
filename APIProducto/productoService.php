<?php
include("config/autocharge.php");
$base = new Base();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['cateria'])){
        
    }else if(isset($_GET['id'])){
        $producto = new Producto($_GET['id']);
        header("HTTP/1.1 200 OK");
        echo json_encode($producto->getById($base->link));
        exit();
    }else{
        header("HTTP/1.1 200 OK");
        echo json_encode(Producto::getAll($base->link));
        exit();
    }
}

header("HTTP/1.1 400 Bad Request");

?>