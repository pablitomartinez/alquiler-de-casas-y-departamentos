<?php
  include './includes/templates/header.php';
?>
    <!-- MAIN  -->
    <main class="contenedor seccion">
      <h1>Contacto</h1>
      <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <!-- <source srcset="build/img/destacada3.jpg" type="image/jpeg" /> -->
        <img loading="lazy" src="build/img/destacada3.jpg" alt="anuncio" />
      </picture>
      <h2>Llene el fotmulario de contacto</h2>
      <form class="formulario">
        <fieldset>
          <legend>Informacion personal</legend>
          <label for="nombre">Nombre</label>
          <input type="text" placeholder="Tu nombre" id="nombre" />

          <label for="email">Email</label>
          <input type="email" placeholder="Tu email" id="email" />

          <label for="telefono">Telefono</label>
          <input type="tel" placeholder="Tu telefono" id="telefono" />

          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje"></textarea>
        </fieldset>

        <fieldset>
          <legend>Informacion sobre la Propiedad</legend>

          <label for="opciones">Vende o compra</label>
          <select type="email" placeholder="Tu email" id="email">
            <option value="" disabled selected>--Selecciona--</option>
            <option value="compra">Compra</option>
            <option value="vende">Vnede</option>
          </select>

          <label for="presupuesto">Precio o Presupuesto</label>
          <input
            type="number"
            placeholder="Tu Precio o Presupuesto"
            id="presupuesto"
          />
        </fieldset>

        <fieldset>
          <legend>Informacion sobre la Propiedad</legend>
          <p>Como desea ser contactado</p>

          <div class="forma-contacto">
            <label for="contactar-telefono">Telfono</label>
            <input name="contacto" type="radio" value="telefono" id="mensaje" />

            <label for="contactar-email">Email</label>
            <input
              name="contacto"
              type="radio"
              value="emial"
              id="contactar-email"
            />
          </div>

          <p>
            Si eligio telefono, elija la fehcha y la hora para ser contactado
          </p>

          <label for="fecha">Fecha</label>
          <input type="date" value="Fecha" id="fecha" />

          <label for="hora">Hora</label>
          <input type="time" value="Hora" id="hora" min="09:00" max="18:00" />
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde" />
      </form>
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
