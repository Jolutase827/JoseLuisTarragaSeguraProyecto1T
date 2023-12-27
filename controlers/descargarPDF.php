<?php
include('../config/autocharge.php');
require_once('../tcpdf/tcpdf.php');
$db = new Base();
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator('Tu Nombre');
$pdf->SetAuthor('Tu Nombre');
$pdf->SetTitle('Tabla de pedidos en PDF');
$pdf->SetSubject('Tabla de pedidos');
        
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage();


$pedido = new Pedido($_GET['id']);
$pedido->completar($db->link);
$lineasPedido =  LineasPedido::getLineasById($db->link,$_GET['id']);

$pdfContent = '
    <table border="1">
        <tr>
            <th>ID Pedido</th>
            <th>Fecha</th>
            <th>Dirección de Entrega</th>
            <th>Número de Tarjeta</th>
            <th>DNI Cliente</th>
        </tr>
        <tr>
            <td>' . $pedido->idPedido . '</td>
            <td>' . $pedido->fecha . '</td>
            <td>' . $pedido->dirEntrega . '</td>
            <td>' . $pedido->nTarjeta . '</td>
            <td>' . $pedido->dniCliente . '</td>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th>Línea de Pedido</th>
            <th>ID Producto</th>
            <th>Cantidad</th>
        </tr>';

foreach ($lineasPedido as $lineaPedido) {
    $pdfContent .= '<tr>
    <td></td>
    <td></td>
    <td>' . $lineaPedido['nlinea'] . '</td>
    <td>' . $lineaPedido['idProducto'] . '</td>
    <td>' . $lineaPedido['cantidad'] . '</td>
</tr>';
}
        

$pdfContent .= '</table>';

$pdf->writeHTML($pdfContent, true, false, true, false, '');

$pdf->Output('tabla_pedidos.pdf', 'D');
        