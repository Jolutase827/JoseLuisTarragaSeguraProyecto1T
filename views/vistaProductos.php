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
    <link rel="stylesheet" href="../views/css/principalProductos.css">
    <link rel="stylesheet" href="../views/css/iniciosesion.css">
    <link rel="stylesheet" href="../views/css/footer.css">
    <link rel="stylesheet" href="../views/css/header.css">
    <title>HBASICSPORT</title>
</head>
<body>
    <?php include "../views/header.php" ?>
    <br class="mb-xxl-5">
    <br>
    <br/>
    <br/>

    <main class="container-fluid ">
        <div class="filtros">
            <h1>Productos</h1>
            <ul class="nav nav-pills d-block">
                <li><i class="bi bi-chevron-down"></i> Ropa mujer</li>
                <li><i class="bi bi-chevron-down"></i> Ropa hombre</li>
                <li><i class="bi bi-chevron-down"></i> Accesorios</li>
                <li><i class="bi bi-chevron-down"></i> Todos</li>
            </ul>
        </div>
        <div class="buscador">
            <input type="text" placeholder="Buscar" class="buscador-input" />
            <i class="bi bi-search icono-buscar"></i>
        </div>        
        <div class="productos container-fluid row g-5">
            <div class="producto col-2">
                <img src="https://res.cloudinary.com/chal-tec/image/upload/w_450,q_auto,f_auto,dpr_3.0/bbg/60001233/Gallery/60001233_yy_0006_titel___06_Capital_Sports_Hexbell_Kurzhantel_set_25kg.jpg" alt="pesa">
                <a href=""><strong>Mancuerna</strong></a>
                <p>Precio: 12€</p>
            </div>
            <div class="col-1"></div>
            <div class="producto col-2">
                <img src="https://res.cloudinary.com/chal-tec/image/upload/w_450,q_auto,f_auto,dpr_3.0/bbg/60001233/Gallery/60001233_yy_0006_titel___06_Capital_Sports_Hexbell_Kurzhantel_set_25kg.jpg" alt="pesa">
                <a href=""><strong>Mancuerna</strong></a>
                <p>Precio: 12€</p>
            </div>
            <div class="col-1"></div>
            <div class="producto col-2">
                <img src="https://res.cloudinary.com/chal-tec/image/upload/w_450,q_auto,f_auto,dpr_3.0/bbg/60001233/Gallery/60001233_yy_0006_titel___06_Capital_Sports_Hexbell_Kurzhantel_set_25kg.jpg" alt="pesa">
                <a href=""><strong>Mancuerna</strong></a>
                <p>Precio: 12€</p>
            </div>
            <div class="col-1"></div>
            <div class="producto col-2">
                <img src="https://res.cloudinary.com/chal-tec/image/upload/w_450,q_auto,f_auto,dpr_3.0/bbg/60001233/Gallery/60001233_yy_0006_titel___06_Capital_Sports_Hexbell_Kurzhantel_set_25kg.jpg" alt="pesa">
                <a href=""><strong>Mancuerna</strong></a>
                <p>Precio: 12€</p>
            </div>
            <div class="col-1"></div>
            
        </div>
    </main>

    <?php include "../views/footer.html"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php if(!$iniciado) echo "<script src='../views/js/iniciosesionAnimations.js'></script>";?>
</body>
</html>