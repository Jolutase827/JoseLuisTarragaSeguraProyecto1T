<?php
if(isset($_POST['correoODni'])){
    $object =  json_decode(file_get_contents("http://localhost/JoseLuisTarragaSeguraProyecto1T/API/clienteService.php?id=".urlencode($_POST['correoODni']."&pwd=".$_POST['pwd'])));
    foreach ($object as  $value) {
        setcookie('dni', $value->dniCliente, time() + 2000,'/');
        setcookie('nombre', $value->nombre, time() + 2000,'/');
    }
    header('Location: inicio.php');
}

?>