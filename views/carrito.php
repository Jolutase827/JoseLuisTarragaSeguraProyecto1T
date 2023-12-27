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
    <link rel="stylesheet" href="../views/css/carrito.css">
    <link rel="stylesheet" href="../views/css/iniciosesion.css">
    <link rel="stylesheet" href="../views/css/footer.css">
    <link rel="stylesheet" href="../views/css/header.css">
    <title>HBASICSPORT</title>
</head>
<body>
    <?php include "../views/header.php" ?>
    <br>
    <br>
    <main class="d-flex justify-content-center col-12" id="main">
        
    </main>
    <br>
    <br>
    <?php include "../views/footer.html"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../views/js/class.js"></script>
    <script>
        <?php echo "const idUnico = '".$idUnico."';"?>
    </script>
    <?php
        if (isset($_POST["cantidad"])) {
            echo "<script>";
                if (isset($_COOKIE["dni"])){
                    echo 'const dni ="'.$_COOKIE["dni"].'";';
                }else{
                    echo "const dni = null;";
                }
                echo "const idProducto = ".$_GET['id'].";
                const cantidad =".$_POST['cantidad'].";
                const precio =".$_POST['precio'].";
                </script>
                <script src='../views/js/anyadirAlCarro.js'></script>";
        }
    ?>
    <script src="../views/js/ensenyarCarrito.js"></script>
    <?php if(!$iniciado) echo "<script src='../views/js/iniciosesionAnimations.js'></script>";?>
    <?php if(!$iniciado) echo "<script src='../views/js/validatelogin.js'></script>";?>
</body>
</html>