<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css" />
  </head>
  <body>
    <!-- HEADER  -->
    <header class="header">
      <div class="contenedor contenido-header">
        <div class="barra">
          <a href="/">
            <img src="build/img/logo.svg" alt="logo" />
          </a>
            <div class="mobile-menu">
            <img src="build/img/barras.svg" alt="icono menu" />
          </div>
          <!-- NAVBAR  -->
          <div class="derecha">
            <nav class="navegacion">
              <a href="nosotros.html">Nosotros</a>
              <a href="anuncios.html">Anuncios</a>
              <a href="blog.html">Blog</a>
              <a href="contacto.html">Contacto</a>
              <img
                src="build/img/dark-mode.svg"
                alt="icono dark-mode"
                class="dark-mode-boton"
              />
            </nav>
          </div>
        </div>
        <!--cierre de barra-->
      </div>
    </header>
    <!-- MAIN  -->
    <main class="contenedor seccion contenido-centrado">
      <h1>Casa en venta frente al bosque</h1>

      <picture>
        <source srcset="build/img/destacada.webp" type="image/webp" />
        <source srcset="build/img/destacada.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/destacada.jpg" alt="anuncio" />
      </picture>

      <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
              <li>
                <img
                  src="build/img/icono_wc.svg"
                  alt="icono wc"
                  loading="lazy"
                  class="icono"
                />
                <p>3</p>
              </li>
              <li>
                <img
                  src="build/img/icono_estacionamiento.svg"
                  alt="icono estacionamiento"
                  class="icono"
                  loading="lazy"
                />
                <p>2</p>
              </li>
              <li>
                <img
                  src="build/img/icono_dormitorio.svg"
                  alt="icono dormitorio"
                  class="icono"
                  loading="lazy"
                />
                <p>4</p>
              </li>
            </ul>
       
        <!-- TEXTO  -->
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          Exercitationem commodi veritatis eos, id mollitia voluptate impedit.
          Aperiam deserunt sint, natus laborum itaque consectetur officia at
          impedit excepturi architecto inventore fuga! Exercitationem commodi
          veritatis eos, id mollitia voluptate impedit. Aperiam deserunt sint,
          natus laborum itaque consectetur officia at impedit excepturi
          architecto inventore
        </p>
        <p>
          Exercitationem commodi veritatis eos, id mollitia voluptate impedit.
          Aperiam deserunt sint, natus laborum itaque consectetur officia at
          impedit excepturi architecto inventore fuga!Exercitationem commodi
          veritatis eos, id mollitia voluptate impedit. Aperiam deserunt sint
        </p>
      </div>
    </main>

    <!-- FOOTER  -->
    <footer class="footer seccion">
      <div class="contenedor contenedor-footer">
        <!-- navegacion  -->
        <nav class="navegacion">
          <a href="nosotros.html">Nosotros</a>
          <a href="anuncios">Anuncios</a>
          <a href="blog">Blog</a>
          <a href="contacto">Contacto</a>
        </nav>
      </div>
      <p class="copyright">Todos los derechos Reservados 2024 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>