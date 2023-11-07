<?php
setcookie('dni', $value->dniCliente, time() - 18000,'/');
setcookie('nombre', $value->nombre, time() - 18000,'/');
header('Location: inicio.php');
?>