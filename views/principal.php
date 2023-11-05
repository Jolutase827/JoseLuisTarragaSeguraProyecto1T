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
    <link rel="stylesheet" href="../views/css/principal.css">
    <link rel="stylesheet" href="../views/css/iniciosesion.css">
    <title>HBASICSPORT</title>
</head>
<body>


  <!-- HEADER-->
    <header class="col-12 container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-7 col-lg-3 h-25 d-flex align-items-center justify-content-center">
                <img src="https://cdn-icons-png.flaticon.com/512/6016/6016314.png" alt="Foto logo" class="col-3 h-100 sombra">
                <h1 class="col-2 h1size mt-2 sombra">HBASICSPORT</h1>
            </div>
            <div class="col-1 col-lg-4 ">
            </div>
            <?php if($iniciado)
                  include "../views/barrainiciosesion.html";
                else
                  include "../views/barraIniciosinsesion.html";?>
            <button class="d-inline col-2 d-lg-none botonicono sombra" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list"></i></button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column">
                  <a href="" class="w-100 enlacesMenu mb-2"><i class="bi bi-shop-window"></i> Tienda</a>
                  <a href="#informacion" class="w-100 enlacesMenu mb-2"><i class="bi bi-info-circle"></i> Información</a>
                  <?php if($iniciado)
                  include "../views/contentoffcanvainiciado.html";
                else
                  include "../views/contentoffcanvasininiciado.html";?>
                </div>
            </div>
        </div>
    </header>

    
  <!-- DIALOG -->
    <?php if(!$iniciado) include "../views/dialogInicioSesion.html" ?>




    <br class="mb-xxl-5">
    <br>
    <br/>
    <br/>



    <main class="container-fluid mt-xl-5" >
      <!-- INTRODUCCIÓN -->
        <div class="row">
            <div class="col-2"></div>
            <div class="col-7 col-md-4 h-65 mt-sm-5 mt-3">
                <h1 class="sombra h1size row ">Bienvenido a HBASICSPORT</h1>
                <p class="sombra row mb-2 mb-md-4">Encuentra tu outfit perfecto para entrenar. Todos
                    y todas mirarán tú reluciente y entrenado cuerpo
                    cuando lleves puesta alguna de nuestras prendas.
                    ¡Corre a comprar una de nuestras comodas y 
                    baratas</p>
                <div class="row">
                    <div class="col-3"></div>
                    <button type="button" class="btn btn-dark sombra mt-2 col-5">¡Compra ahora!</button>
                </div>
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide col-6 h-50 d-none d-md-flex" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://img.freepik.com/foto-gratis/hermosa-joven-atleta-practicando-espacios-blanco-retrato-sombras_155003-21326.jpg?t=st=1698425418~exp=1698426018~hmac=e7080c85bef2ac48c4acf024da4ea7400f38e3346c63b9e65af66477b28c1940" class="d-block w-100" alt="Hombre haciendo deporte">
                  </div>
                  <div class="carousel-item">
                    <img src="https://img.freepik.com/foto-gratis/hermosa-joven-atleta-practicando-sobre-fondo-blanco-estudio-retrato-sombras-modelo-ajuste-deportivo-movimiento-accion_155003-21910.jpg" class="d-block w-100" alt="Mujer haciendo deporte">
                  </div>
                  <div class="carousel-item">
                    <img src="https://img.freepik.com/fotos-premium/hermosa-joven-atleta-practicando-sobre-fondo-blanco-estudio-sombra_489646-13923.jpg" class="d-block w-100" alt="Mujer con pesas">
                  </div>
                </div>
              </div>    
        </div>
        <br>
        <!-- IMAGENES -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-8  mt-2 sombra me-3 imagenHombre position-relative">
                <button type="button" class="btn btn-light botonesTipos">Ropa hombre</button>
            </div>
            <div class="col-lg-3 col-8 mt-2 sombra me-3 imagenMujer position-relative">
                <button type="button" class="btn btn-light botonesTipos">Ropa mujer</button>
            </div>
            <div class="col-lg-3 col-8  mt-2 sombra me-3 imagenAccesorio position-relative">
                <button type="button" class="btn btn-light botonesTipos4">Accesorios</button>
            </div>
        </div>


        <br id="informacion">
        <br>
        <br>
        <br>
        <br>



        <!-- INFORMACIÓN -->
        <div class="container sombra d-flex flex-column justify-content-center align-items-center informacionC">
            <h1 class="fontTitle mt-4">Información</h1>
            <strong class="w-50 mb-5">HBASESPORT es una marca de renombre en el mundo de la ropa y accesorios para el gimnasio. Nos enorgullece ofrecer a nuestros clientes productos de la más alta calidad, importados directamente desde Noruega, un país conocido por su compromiso con la excelencia y los estándares de la Unión Europea.
              <br>
                Nuestra misión es proporcionar a los entusiastas del fitness y a aquellos que buscan una vida activa y saludable una amplia gama de productos que no solo sean funcionales y duraderos, sino también con un diseño moderno y atractivo. Creemos que la ropa y los accesorios que elijas para tu entrenamiento deben inspirarte y motivarte a alcanzar tus metas, ya sea en el gimnasio, en un estudio de yoga o en tu rutina diaria de ejercicio. </strong>
        </div>
    </main>



    <br>
    <br>
    <!-- FOOTER -->
    <?php include "../views/footer.html"; ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php if(!$iniciado) echo "<script src='../views/js/iniciosesionAnimations.js'></script>";?>
    <?php if(!$iniciado) echo "<script src='../views/js/validatelogin.js'></script>";?>
</body>
</html>