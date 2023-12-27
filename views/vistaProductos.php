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
    <link rel="stylesheet" href="../views/css/principalProductos.css">
    <link rel="stylesheet" href="../views/css/iniciosesion.css">
    <link rel="stylesheet" href="../views/css/footer.css">
    <link rel="stylesheet" href="../views/css/header.css">
    <title>HBASICSPORT</title>
</head>
<body>
    <?php include "../views/header.php" ?>
    <div class="d-md-none d-block filtroR pt-2">
        <a class="btn ms-2 " data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" id="filtrar" aria-expanded="false" aria-controls="multiCollapseExample1"></a>
        <div class="col rounded-0">
            <div class="collapse multi-collapse rounded-0" id="multiCollapseExample1">
                <div class="card card-body rounded-0 border-0 filtrosRforma p-0">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action rounded-0"><i class="bi bi-person-standing"></i> Ropa de hombre</a>
                        <a href="#" class="list-group-item list-group-item-action rounded-0"><i class="bi bi-person-standing-dress"></i> Ropa de mujer</a>
                        <a href="#" class="list-group-item list-group-item-action rounded-0"><i class="bi bi-duffle"></i> Accesorios</a>
                        <a href="#" class="list-group-item list-group-item-action rounded-0"><i class="bi bi-eyeglasses"></i> Ver todos</a>
                    </div>
                </div>
            </div>
    </div>
    <br>
    <br>
    </div>
    <main class="container-fluid m-0 row">
        <div class="filtros col-3 d-none d-md-block m-0">
            <h1>Productos</h1>
            <ul class="nav nav-pills d-block">
                <li class="link-fintrar"><a href=""><i class="bi bi-person-standing"></i>  Ropa mujer</a></li>
                <li class="link-fintrar"><a href=""><i class="bi bi-person-standing-dress"></i> Ropa hombre</a></li>
                <li class="link-fintrar"><a href=""><i class="bi bi-duffle"></i> Accesorios</a></li>
                <li class="link-fintrar"><a href=""><i class="bi bi-eyeglasses"></i> Todos</a></li>
            </ul>
        </div>
        <div class="buscador col-12 col-md-8">
            <input type="text" placeholder="Buscar" class="buscador-input" />
            <i class="bi bi-search icono-buscar"></i>
            <div class="productos container-fluid col-12 row g-5 m-0 d-flex justify-content-center">
                <?php transformToHTML($productos);?>
            </div>
        </div>        
        
    </main>
    <br>
    <br>
    <br>
    <br>
    <?php include "../views/footer.html"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../views/js/filtrarAnimacion.js"></script>
    <?php if(!$iniciado) echo "<script src='../views/js/iniciosesionAnimations.js'></script>";?>
    <?php if(!$iniciado) echo "<script src='../views/js/validatelogin.js'></script>";?>
</body>
</html>