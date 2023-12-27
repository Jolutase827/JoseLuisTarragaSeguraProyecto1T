<?php
if(isset($_POST['pagar'])){
    include('../config/autocharge.php');
    $db = new Base();
    $cliente = new Cliente($_COOKIE['dni']);
    
    $cliente = $cliente->getById($db->link);
    $carrito = Carrito::getByIdUnico($db->link,$_COOKIE['carrito']);
    $idPedido = Pedido::getLastIdPedido($db->link)+1;
    $pedido = new Pedido($idPedido,date("Y-m-d"),$cliente['direccion'],$_POST['cuenta'],$cliente['dniCliente']);
    $pedidoHtml = "<table>
                        <tr>
                            <th>$pedido->idPedido</th>
                            <th>$pedido->fecha</th>
                            <th>$pedido->dirEntrega</th>
                            <th>$pedido->nTarjeta</th>
                            <th>$pedido->dniCliente</th>
                        </tr>";
    $pedido->insert($db->link);
    $contador = 1;
    foreach ($carrito as $carritolinea) {
        $lineaPedido = new LineasPedido($idPedido,$contador,$carritolinea['idProducto'],$carritolinea['cantidad']);
        $lineaPedido->insert($db->link);
        $pedidoHtml  = $pedidoHtml."<tr>
                                        <th></th>
                                        <th></th>
                                        <th>$lineaPedido->nlinea</th>
                                        <th>$lineaPedido->idProducto</th>
                                        <th>$lineaPedido->cantidad</th>
                                    </tr>";
        $contador++; 
    }
    $pedidoHtml = $pedidoHtml. "</table>
        <a href='descargarPDF.php?id=$idPedido'>Descargar pdf</a>
        <a href='inicio.php'>Volver a inicio</a>";
    Carrito::deleteByidUnico($db->link,$_COOKIE['carrito']);
    setcookie('carrito', '', time() - 18000,'/');
    setcookie('dni', '', time() - 18000,'/');
    setcookie('nombre', '', time() - 18000,'/');
    echo $pedidoHtml;

}else {
    if(isset($_COOKIE['dni'])){
        include('../views/pagar.php');
    }else{
        include('../views/noregistrado.php');
    }
}