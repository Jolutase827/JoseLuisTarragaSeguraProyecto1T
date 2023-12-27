<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/6016/6016314.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Bebas+Neue&family=Dancing+Script:wght@400;700&family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Barlow&family=Bebas+Neue&family=Dancing+Script:wght@400;700&family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../views/css/detalle.css">
    <link rel="stylesheet" href="../views/css/iniciosesion.css">
    <link rel="stylesheet" href="../views/css/footer.css">
    <link rel="stylesheet" href="../views/css/header.css">
    <title>HBASICSPORT</title>
</head>
<body>
    <?php include "../views/header.php" ?>
    <br>
    <br>
    <main class="d-flex justify-content-center col-12">
        
        <div class="container contenedorProducto col-12 sombra row d-flex align-items-center pb-5 pe-4 ps-4">
            <form action="vercarrito.php?id=<?= $producto->idProducto; ?>" method="post" id="formulario">  
                <br>
                <br>
                <h1 class="mb-5 h1size nombreProducto"><?= $producto->nombre; ?></h1>
                <br>
                <div class="col-12 row m-0 p-0">
                    <img src="../imagenes/<?=$producto->foto ?>" alt="Foto producto" class="col-lg-3 col-md-8 mb-4 col-12 mb-3 imagenProducto sombra" />
                    <div class="col-lg-8 col-12 row ms-lg-4">
                        <div class="col-lg-6 col-12">
                            <p><strong>Productos disponibles:</strong><p>
                            <p>-<?= $producto->unidades; ?> unidades</p>
                        </div>
                        <div class="col-lg-6 col-12">
                            <p><strong>Marca:</strong><p>
                            <p>-<?= $producto->marca; ?></p>
                        </div>
                        <div class="col-lg-6 col-12">
                            <p><strong>Categoría:</strong><p>
                            <p>-<?= $producto->categoria; ?></p>
                        </div>
                        <div class="col-lg-6 col-12">
                            <p><strong>Descripción:</strong><p>
                            <input type="text" class="d-none" value="<?= $producto->precio; ?>" name="precio" readonly>
                            <p>-<?=($producto->descripcion!=null)?$producto->descripcion:'La mejor tela del mercado, transpirable y casi hace deporte por ti.</p>
                            <p>-Proporciona comodidad sin igual y se adapta a tus movimientos, convirtiendo cada día en una experiencia de máximo confort y estilo.'?></p>
                        </div>
                    </div>
                </div>
                <div class="cantidad col-lg-3 col-12 d-flex justify-content-center">
                    <span class="sombra">
                        <strong id="restar" class="rounded-left">-</strong>
                        <input type="text" name="cantidad" id="cantidadAnyadir" class="formaNumero" value="<?=($producto->unidades>0)?1:0;?>" min="<?=($producto->unidades>0)?1:0;?>" max="<?= $producto->unidades; ?>" maxlength="<?=strlen($producto->unidades)?>" minlength="1"/>
                        <strong  id="sumar" class="rounded-right">+</strong>
                    </span>
                </div>
                <div class="cantidad col-lg-3 col-12 d-flex justify-content-center">
                    <strong>Precio: <span id="precio"></span>€</strong>
                </div>
                <div class="d-flex justify-content-lg-end justify-content-center mt-4 mt-lg-0">
                    <button id="botonComprar" class="btn botonAñadirCarrito col-lg-2 col-8"><i class="bi bi-bag-plus"></i> Añadir al carrito</button>
                </div>
            </form>
        </div>
    </main>
    <br>
    <br>
    <?php include "../views/footer.html"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        const stock = <?= $producto->unidades; ?>;
        const precio = <?= $producto->precio; ?>;
    </script>
    <script src="../views/js/detalleProducto.js">
        
    </script>
    <?php if(!$iniciado) echo "<script src='../views/js/iniciosesionAnimations.js'></script>";?>
    <?php if(!$iniciado) echo "<script src='../views/js/validatelogin.js'></script>";?>
</body>
</html>