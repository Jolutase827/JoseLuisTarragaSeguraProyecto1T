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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../views/css/registro.css">
    <link rel="stylesheet" href="../views/css/footer.css">
    <title>Registrarse</title>
</head>
<body>
    <header class="col-12 container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-7 col-lg-3 h-25 d-flex align-items-center justify-content-center">
                <img src="https://cdn-icons-png.flaticon.com/512/6016/6016314.png" alt="Foto logo" class="col-3 h-100 sombra">
                <a href="inicio.php"><h1 class="col-2 h1size mt-2 sombra">HBASICSPORT</h1></a>
            </div>
    </header>
    <br>
    <br>
    <main class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-6 pt-4 ">
                <h1 class="row ms-5">Registrate</h1>
                <form action="validar.php" method="post" id="formulario">
                    <div class="input-container row position-relative mt-4 ms-5">
                        <i class="fas fa-user"></i>
                        <input id="name" type="text" class="inputBonito w-75" placeholder="Nombre*" required/>
                    </div>
                    <div class="row position-relative mt-3 ms-5 mb-1" id="errorNombre">
                        
                    </div>
                    <div class="input-container row position-relative mt-3 ms-5">
                        <i class="bi bi-passport"></i>
                        <input id="dni" type="text" class="inputBonito w-75 " placeholder="DNI*" name="dni" required/>
                    </div>
                    <div class="row position-relative mt-3 ms-5 mb-1" id="errorDNI">

                    </div>
                    <div class="input-container row position-relative mt-3 ms-5">
                        <i class="bi bi-house-fill"></i>
                        <input id="direccion" type="text" class="inputBonito w-75 " placeholder="Direccion*" required/>
                    </div>
                    <div class="row position-relative mt-3 ms-5 mb-1" id="errorDireccion">
                        
                    </div>
                    <div class="input-container row position-relative mt-3 ms-5">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" class="inputBonito w-75 " placeholder="Correo electrónico*" required/>
                    </div>
                    <div class="row position-relative mt-3 ms-5 mb-1" id="errorEmail">
                        
                    </div>
                    <div class="input-container row position-relative mt-3 ms-5" >
                        <i class="fas fa-lock"></i>
                        <input id="pwd" type="password" class="inputBonito w-75 " placeholder="Contraseña*  " name="pwd" required/>
                    </div>
                    <div class="row position-relative mt-3 ms-5 contrenedorErroresContraseña" id="contrenedorErroresContraseña">
                        <p id="caracteres" class="red"><i class="bi bi-x"></i> Mínimo 8 caracteres</p>
                        <p id="mayuscula" class="red"><i class="bi bi-x"></i> Mínimo 1 mayúscula</p>
                        <p id="minuscula" class="red"><i class="bi bi-x"></i> Mínimo 1 minuscula</p>
                        <p id="numero" class="red"><i class="bi bi-x"> </i> Mínimo 1 número</p>
                        <p id="especial" class="red"><i class="bi bi-x"></i> Mínimo 1 caracter especial</p>
                    </div>
                    <div class="input-container row position-relative mt-3 ms-5" >
                        <i class="fas fa-lock"></i>
                        <input id="rpwd" type="password" class="inputBonito w-75 " placeholder="Repite la contraseña*  " required/>
                    </div>
                    <div class="row position-relative mt-3 ms-5 " id="errorRepetir">
                        <p class="red"><i class="bi bi-x"></i> Las contraseñas no coinciden</p>
                    </div>
                    <div class="row container mt-4 ms-5">
                        <input id="bregistro" type="button" value="Registrate" class="col-11 w-75 me-2 botonRegistro">
                    </div>
                    <div class="row position-relative mt-3 ms-5 " id="errorCampos">
                        <p class="red">Asegurate de haber rellenado todos los campos correctamente</p>
                    </div>
                    </form>
                    <div class="row text-center w-75 ms-5">
                      <p class="mt-2 olvidado">¿Has olvidado tu contraseña?
                        <a href="" class="enlaceRegistro"> Clica aquí.</a></p>
                    </div>

                    <p class="mt-3 mb-4 ms-5">¿Ya tienes cuenta?<strong><a href="inicio.php" id="inicioSesion" class="enlaceRegistro"> Inicia sesión.</a></strong></p>
                    <div class="row d-flex d-md-none contenedorabajo d-flex flex-column align-items-center justify-content-center p-5 text-center">
                        <h1>HBASICSPORT</h1>
                        <p>Registrate ahora en la mejor tienda online de ropa y accesorios de gimnasio.¡No te pierdas nuestra amplia selección de productos de alta calidad! Descubre las últimas tendencias en moda deportiva y eleva tu estilo en el gimnasio. Regístrate hoy y obtén descuentos exclusivos.</p>
                    </div>
                </form>
            </div>
            <div class="col-6 d-none d-md-flex contenedorDerecha d-flex flex-column align-items-center justify-content-center p-5 text-center">
                <h1>HBASICSPORT</h1>
                <p>Registrate ahora en la mejor tienda online de ropa y accesorios de gimnasio.¡No te pierdas nuestra amplia selección de productos de alta calidad! Descubre las últimas tendencias en moda deportiva y eleva tu estilo en el gimnasio. Regístrate hoy y obtén descuentos exclusivos.</p>
            </div>
        </div>
        
    </main>
    <br>
    <br>
    <?php include "../views/footer.html"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../views/js/scriptiregistro.js"></script>
    <script src="../views/js/validatecontrasenya.js"></script>
</body>
</html>