<?php

function transformToHTML($array){
    foreach ($array as  $value) {
        echo "<div class='producto col-xl-3  me-4 col-md-5  col-sm-5 col-12 p-0 ' id='".$value->idProducto."'>
        <form action='vercarrito.php?id=".$value->idProducto."' method='post'>
            <input class='d-none' type='number' value='".$value->precio."' name='precio' required readonly/>
            <input class='d-none' type='number' value='1' name='cantidad' required readonly/>
            <button type='submit'><i class='bi bi-cart-plus'></i></button>
            <img src='../imagenes/".$value->foto."' alt='pesa'>
            <div class='ms-2'>
                <a href='detalle.php?id=".$value->idProducto."'><strong>".$value->nombre."</strong></a>
            </div>
            <p class='ms-2'>Precio: ".$value->precio."€</p>
        </form>
    </div>";
    }
}
