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
    <main class="contenedor seccion ">
      <h2>Conoce sobre Nosotros</h2>
    <!-- articulo  -->
    <div class="articulo-nosotros">
      <!-- IMAGEN -->
      <div class="imagen">
        <picture>
          <source srcset="build/img/nosotros.webp" type="image/webp" />
          <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/nosotros.jpg" alt="nosotros" />
        </picture>
      </div>
      <div class="texto-nosotros">
        <blockquote>25 Años de experiencia</blockquote>
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
    </div>
    </main>

    <!-- ICONOS  -->
    <section class="contenedor seccion">
      <h1>Mas sobre nosotros</h1>
      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="icono de seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit
            sunt itaque reiciendis laborum dolorum
          </p>
        </div>
        <div class="icono">
          <img
            src="build/img/icono2.svg"
            alt="icono de Precio"
            loading="lazy"
          />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit
            sunt itaque reiciendis laborum dolorum
          </p>
        </div>
        <div class="icono">
          <img
            src="build/img/icono3.svg"
            alt="icono de Tiempo"
            loading="lazy"
          />
          <h3>Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit
            sunt itaque reiciendis laborum dolorum
          </p>
        </div>
      </div>
    </section>

    <!-- FOOTER  -->
    <footer class="footer seccion">
      <div class="contenedor contenedor-footer">
        <!-- navegacion  -->
        <nav class="navegacion">
          <a href="nosotros.html">Nosotros</a>
          <a href="anuncions">Anuncios</a>
          <a href="blog">Blog</a>
          <a href="contacto">Contacto</a>
        </nav>
      </div>
      <p class="copyright">Todos los derechos Reservados 2024 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>