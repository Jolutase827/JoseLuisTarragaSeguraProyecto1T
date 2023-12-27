<?php
include("class/Carrito.php");
include("class/Base.php");
$db = new Base(); 

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $body = json_decode(file_get_contents('php://input'), true);
        $carrito = new Carrito($body['idUnico'],'',$body['dniCliente'],$body['idProducto'],$body['cantidad'],$body['coste']);
        header("HTTP/1.1 200 OK");
        echo json_encode($carrito->insert($db->link));
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'PUT'){
        $body = json_decode(file_get_contents('php://input'), true);
        if(isset($body['nlinea'])){
            $carrito = new Carrito('',$body['nlinea'],'','',$body['cantidad'],$body['coste']);
            header("HTTP/1.1 200 OK");
            echo json_encode($carrito->updateLine($db->link));
            exit();
        }else{
            $carrito = new Carrito($body['idUnico'],'',$body['dniCliente'],'','','');
            header("HTTP/1.1 200 OK");
            echo json_encode($carrito->updateDniAndIdUnico($db->link,$body['idUnicoNuevo']));
            exit();
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){

        if(isset($_GET['idUnico'])&&!isset($_GET['idProducto'])){
            header("HTTP/1.1 200 OK");
            echo json_encode(Carrito::getByIdUnico($db->link,$_GET['idUnico']));
            exit();
        }
        if(isset($_GET['idUnico']) && isset($_GET['idProducto'])){
            header("HTTP/1.1 200 OK");
            echo json_encode(Carrito::getByProductoIdUnico($db->link,$_GET['idUnico'],$_GET['idProducto']));
            exit();
        }
        if(isset($_GET['dni'])){
            header("HTTP/1.1 200 OK");
            echo json_encode(Carrito::getByDni($db->link,$_GET['dni']));
            exit();
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        $body = json_decode(file_get_contents('php://input'), true);
        $carrito = new Carrito('',$body['nlinea']);
        header("HTTP/1.1 200 OK");
        echo json_encode($carrito->delete($db->link));
        exit();
    }

    header("HTTP/1.1 400 Bad Request");