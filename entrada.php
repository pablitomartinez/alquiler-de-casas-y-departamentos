<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
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
<?php
  incluirTemplate('footer');
?>