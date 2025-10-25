<header class="container">
  <div class="row">
    <div class="col-lg-3 text-center">
      <a class="logo" href="index.php"
        ><img src="img/logo.jpg" alt="logo imprac"
      /></a>
    </div>

    <div class="col-lg-9 text-right navegacion">
      <div class="row">
        <div class="col-lg-12">
          <a
            class="facebook"
            href="https://wa.me/5491130904101?text=Hola%20..."
            target="_blank"
          >
            <img src="img/whatsapp.png" alt="whatsapp" />
          </a>
          <a
            class="facebook"
            href="https://www.facebook.com/Imprac-Insumos-498583280303629/"
            target="_blank"
          >
            <img src="img/facebook.png" alt="facebook" />
          </a>
          <a
            class="instagram"
            href="https://www.instagram.com/imprac_automatizacion/?hl=es-la"
            target="_blank"
          >
            <img src="img/instagram.png" alt="instagram" />
          </a>
        </div>

        <div class="col-lg-12 text-right">
          <a class="logo_small" href="index.php"
            ><img src="img/logo.jpg" alt="logo imprac"
          /></a>

          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">&nbsp;</a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <?php $active = ($current == 'empresa') ? "active" : " "; ?>
                <li class="nav-item">
                  <a class="nav-link <?php echo $active ?>" href="empresa.php"
                    >EMPRESA<span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="separador">|</li>
                <?php $active = ($current == 'productos') ? "active" : " "; ?>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle <?php echo $active ?>"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    PRODUCTOS
                  </a>
                  <div
                    style="z-index: 10000"
                    class="dropdown-menu"
                    aria-labelledby="navbarDropdown"
                  >
                    <a class="dropdown-item" href="automatizacion-portones.php"
                      >Automatización</a
                    >
                    <a class="dropdown-item" href="electronica.php"
                      >Electrónica</a
                    >
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="accesorios-repuestos.php"
                      >Accesorios y Repuestos</a
                    >
                    <!-- <a class="dropdown-item" href="repuestos.php">Repuestos</a> -->
                  </div>
                </li>
                <li class="separador">|</li>
                <?php $active = ($current == 'descargas') ? "active" : " "; ?>
                <li class="nav-item">
                  <a class="nav-link <?php echo $active ?>" href="descargas.php"
                    >DESCARGAS</a
                  >
                </li>
                <li class="separador">|</li>
                <?php $active = ($current == 'distribuidores') ? "active" : " ";
                ?>
                <li class="nav-item">
                  <a
                    class="nav-link <?php echo $active ?>"
                    href="distribuidores.php"
                    >DISTRIBUIDORES</a
                  >
                </li>
                <li class="separador">|</li>
                <?php $active = ($current == 'contacto') ? "active" : " "; ?>
                <li class="nav-item">
                  <a class="nav-link <?php echo $active ?>" href="contacto.php"
                    >CONTACTO</a
                  >
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
