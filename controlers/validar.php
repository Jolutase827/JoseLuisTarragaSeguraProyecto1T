<?php
if(isset($_POST['dni'])){
    $object =  json_decode(file_get_contents("http://localhost/JoseLuisTarragaSeguraProyecto1T/API/clienteService.php?id=".urlencode($_POST['dni']."&pwd=".$_POST['pwd'])));
    foreach ($object as  $value) {
        setcookie('dni', $value->dniCliente, time() + 18000,'/');
        setcookie('nombre', $value->nombre, time() + 18000,'/');
    }
    header('Location: inicio.php');
}

?>