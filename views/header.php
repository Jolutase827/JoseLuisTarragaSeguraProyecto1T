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
                  include "../views/barrainiciosesion.php";
                else
                  include "../views/barraIniciosinsesion.php";?>
            <button class="d-inline col-2 d-lg-none botonicono sombra" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list"></i></button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column">

                    <?php if($home) echo '<a href="principal.php" class="w-100 enlacesMenu mb-2"><i class="bi bi-shop-window"></i> Tienda</a>'; else echo'<a href="inicio.php" class="w-100 enlacesMenu mb-2"><i class="bi bi-house"></i> Home</a>';?>
                  
                  <a href="#informacion" class="w-100 enlacesMenu mb-2"><i class="bi bi-info-circle"></i> Información</a>
                  <?php if($iniciado)
                  include "../views/contentoffcanvainiciado.php";
                else
                  include "../views/contentoffcanvasininiciado.html";?>
                </div>
            </div>
        </div>
    </header>

    
  <!-- DIALOG -->
    <?php if(!$iniciado) include "../views/dialogInicioSesion.html" ?>