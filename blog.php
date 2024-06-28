<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
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
<?php
  incluirTemplate('footer');
?>