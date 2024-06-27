<?php
  include './includes/templates/header.php';
?>
    <!-- MAIN  -->

    <main class="contenedor seccion contenido-centrado">
      <h1>Guia para la decoracion de tu hogar</h1>
      <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp" />
        <source srcset="build/img/destacada2.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/destacada2.jpg" alt="anuncio" />
      </picture>
      <p class="infomracion-meta" >
        Escrito por: <span>Pablo Martinez </span> el: <span>05/06/2025</span>
      </p>
      <div class="resumen-propiedad">
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
