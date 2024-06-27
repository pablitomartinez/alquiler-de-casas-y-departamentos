<?php
  include './includes/templates/header.php';
?>
    <!-- MAIN  -->
    <main class="contenedor seccion contenido-centrado">
      <h1>Nuestro Blog</h1>
      <!-- ARTICULO 1  -->
      <article class="entrada-blog">
        <!-- IMAGEN  -->
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog1.webp" type="imagen/webp" />
            <source srcset="build/img/blog1.jpg" type="imagen/jpeg" />
            <img
              src="build/img/blog1.jpg"
              alt="Entrada al Blog"
              loading="lazy"
            />
          </picture>
        </div>
        <!-- TEXTO BLOG  -->
        <div class="texto-entrada">
          <a href="entrada.html">
            <h4>Terraza en el techo de tu casa</h4>
            <p>Escrito el: <span>12/06/2024</span> por: <span>Admin</span></p>
          </a>
        </div>
      </article>
      <!-- ARTICULO 2  -->
      <article class="entrada-blog">
        <!-- IMAGEN  -->
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog2.webp" type="imagen/webp" />
            <source srcset="build/img/blog2.jpg" type="imagen/jpeg" />
            <img
              src="build/img/blog2.jpg"
              alt="Entrada al Blog"
              loading="lazy"
            />
          </picture>
        </div>
        <!-- TEXTO BLOG  -->
        <div class="texto-entrada">
          <a href="entrada.html">
            <h4>Guia para la decoracion de tu casa</h4>
            <p>Escrito el: <span>18/06/2024</span> por: <span>Admin</span></p>
          </a>
        </div>
      </article>
      <!-- ARTICULO 3  -->
      <article class="entrada-blog">
        <!-- IMAGEN  -->
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog3.webp" type="imagen/webp" />
            <source srcset="build/img/blog3.jpg" type="imagen/jpeg" />
            <img
              src="build/img/blog3.jpg"
              alt="Entrada al Blog"
              loading="lazy"
            />
          </picture>
        </div>
        <!-- TEXTO BLOG  -->
        <div class="texto-entrada">
          <a href="entrada.html">
            <h4>Casa en la que vivio Messi</h4>
            <p>Escrito el: <span>22/06/2024</span> por: <span>Admin</span></p>
          </a>
        </div>
      </article>

      <!-- ARTICULO 4  -->
      <article class="entrada-blog">
        <!-- IMAGEN  -->
        <div class="imagen">
          <picture>
            <source srcset="build/img/blog4.webp" type="imagen/webp" />
            <source srcset="build/img/blog4.jpg" type="imagen/jpeg" />
            <img
              src="build/img/blog4.jpg"
              alt="Entrada al Blog"
              loading="lazy"
            />
          </picture>
        </div>
        <!-- TEXTO BLOG  -->
        <div class="texto-entrada">
          <a href="entrada.html">
            <h4>Casa en la que vivio Messi</h4>
            <p>Escrito el: <span>22/06/2024</span> por: <span>Admin</span></p>
          </a>
        </div>
      </article>
    </main>
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
