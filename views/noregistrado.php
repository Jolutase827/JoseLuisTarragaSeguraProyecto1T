<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Para comprar necesita iniciar sesión</p>
    <a href="inicio.php" id="inicioSesion">Iniciar sesión</a>
    <script>
        document.getElementById('inicioSesion').addEventListener('click',()=>{
        sessionStorage.setItem("iniciosesion","true");
        });
    </script>
</body>
</html>