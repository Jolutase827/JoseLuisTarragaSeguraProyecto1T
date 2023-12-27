<!-- HEADER-->
<header class="col-12 container-fluid">
        <div class="row d-flex align-items-center">
        
            <div class="col-7 col-lg-3 h-25 d-flex align-items-center justify-content-center">
            <?php if(isset($_GET['id'])) echo "<a href='principal.php#".$_GET['id']."' class='col-1'><i class='bi bi-chevron-left fs-5'></i></a> <div class='col-1'></div>" ?>

                <img src="https://cdn-icons-png.flaticon.com/512/6016/6016314.png" alt="Foto logo" class="col-3 h-100 sombra">
               <a href="inicio.php">
                 <h1 class="col-2 h1size mt-2 sombra">HBASICSPORT</h1>
               </a>
            </div>
            <div class="col-1 col-lg-4 ">
            </div>
            <?php if($iniciado)
                  include "../views/barrainiciosesion.php";
                else
                  include "../views/barraIniciosinsesion.php";?>
            <div class="col-2 d-flex d-lg-none justify-content-end">
              <div class="dropdown">
                <button class="idioma" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-translate botonicono sombra"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">🇪🇦Castellano</a></li>
                  <li><a class="dropdown-item" href="#">🇬🇧Inglés</a></li>
                  <li><a class="dropdown-item" href="#">🇩🇪Aleman</a></li>
                </ul>
              </div>
              <button class=" botonicono sombra" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list"></i></button>
            </div>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column">

                    <?php if($home=='inicio'){ echo '<a href="principal.php" class="w-100 enlacesMenu mb-2"><i class="bi bi-shop-window"></i> Tienda</a>'; }else if($home=='carrito'){ echo'<a href="inicio.php" class="w-100 enlacesMenu mb-2"><i class="bi bi-house"></i> Home</a><a href="principal.php" class="w-100 enlacesMenu mb-2"><i class="bi bi-shop-window"></i> Tienda</a>';} else if($home==3){ echo '<a href="inicio.php" class="w-100 enlacesMenu mb-2"><i class="bi bi-house"></i> Home</a>';}?>
                  
                  <a href="inicio.php#informacion" class="w-100 enlacesMenu mb-2"><i class="bi bi-info-circle"></i> Información</a>
                  <?php if(!isset($estoyEnCarrito)){ echo'<a href="vercarrito.php" class="w-100 enlacesMenu mb-2"><i class="bi bi-cart2"></i> Carrito <span class="cantidadDeProductosCarrito rounded">0</span></a>';}?>
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