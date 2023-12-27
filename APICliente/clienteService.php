<?php
    include("config/autocharge.php");
    include("config/functions.php");
    $base = new Base();
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $body = json_decode(file_get_contents('php://input'), true);
        $cliente = new Cliente($body['dniCliente'],$body['nombre'],$body['direccion'],$body['email'],transformToHash($body['pwd']));
        $errorDni = $cliente->existDni($base->link);
        $errorEmail = $cliente->existEmail($base->link);
        if($errorEmail && $errorDni){
            header("HTTP/1.1 200 OK");
            echo json_encode("1");
            exit();
        }else if($errorDni){
            header("HTTP/1.1 200 OK");
            echo json_encode("2");
            exit();
        }else if($errorEmail){
            header("HTTP/1.1 200 OK");
            echo json_encode("3");
            exit();
        }

        
        if($dniCliente=$cliente->insert($base->link))
        {
          header("HTTP/1.1 200 OK");
          echo json_encode("Insertado el post numero $dniCliente");
          exit();
         }
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['id'])&&isset($_GET['pwd'])){
            $aux = new Cliente($_GET['id']);
            $cliente = $aux->getById($base->link);
            if($cliente==null){
                $aux->email = $_GET['id'];
                $cliente = $aux->getByEmail($base->link);
            }
            if($cliente==null){
                header("HTTP/1.1 200 OK");
                echo json_encode("notExistUser");
                exit();
            }
            if(verifyPwd($_GET['pwd'],$cliente['pwd'])){
                header("HTTP/1.1 200 OK");
                echo json_encode($cliente);
                exit();
            }else{
                header("HTTP/1.1 200 OK");
                echo json_encode("pwdIncorrect");
                exit();
            }
        }else{
            header("HTTP/1.1 200 OK");
            echo json_encode(Cliente::getAll($base->link));
            exit();
        }
    }


    header("HTTP/1.1 400 Bad Request");