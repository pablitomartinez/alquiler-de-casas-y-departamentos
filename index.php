<?php
  require 'includes/funciones.php';
  
  incluirTemplate('header', $inicio = true);
?>
    <!-- MAIN  -->
    <main class="contenedor seccion">
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
    </main>

    <!-- CARDS  -->
    <section class="seccion contenedor">
      <h2>Casas y Departamentos en Venta</h2>
      <!-- CARD  -->
      <div class="contenedor-anuncios">
        <!-- CARD 1 -->
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio1.webp" type="image/webp" />
            <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
            <img
              
              loading="lazy"
              src="build/img/anuncio2.jpg"
              alt="anuncio"
            />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa de Lujo en el Lago</h3>
            <p>
              Casa en el lago con excelente vista, acabados de lujo a un
              excelente precio
            </p>
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
              <li>
                <img
                  src="build/img/icono_wc.svg"
                  alt="icono wc"
                  class="icono"
                  loading="lazy"
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
            <a href="/anuncios.html" class="boton-amarillo-block"
              >Ver propiedad</a
            >
          </div>
        </div>
        <!-- CARD 2 -->
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio2.webp" type="image/webp" />
            <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
            <img
              
              loading="lazy"
              src="build/img/anuncio2.jpg"
              alt="anuncio"
            />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa de Lujo en el Lago</h3>
            <p>
              Casa en el lago con excelente vista, acabados de lujo a un
              excelente precio
            </p>
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
              <li>
                <img
                  src="build/img/icono_wc.svg"
                  alt="icono wc"
                  class="icono"
                  loading="lazy"
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
            <a href="/anuncios.html" class="boton-amarillo-block"
              >Ver propiedad</a
            >
          </div>
        </div>
        <!-- CARD 3 -->
        <div class="anuncio">
          <picture>
            <source srcset="build/img/anuncio3.webp" type="image/webp" />
            <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
            <img
              
              loading="lazy"
              src="build/img/anuncio3.jpg"
              alt="anuncio"
            />
          </picture>
          <div class="contenido-anuncio">
            <h3>Casa de Lujo en el Lago</h3>
            <p>
              Casa en el lago con excelente vista, acabados de lujo a un
              excelente precio
            </p>
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
              <li>
                <img
                  src="build/img/icono_wc.svg"
                  alt="icono wc"
                  class="icono"
                  loading="lazy"
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
                  loading="lazy"
                  class="icono"
                />
                <p>4</p>
              </li>
            </ul>
            <a href="/anuncios.html" class="boton-amarillo-block"
              >Ver propiedad</a
            >
          </div>
        </div>
      </div>
      <div class="alinear-derecha">
        <a href="anuncios.html" class="boton-verde">Ver todas</a>
      </div>
    </section>
    <!-- CONTACTO  -->
    <section class="imagen-contacto">
      <h2>Encuentra la casa de tus sue;o</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae
        unde voluptatem
      </p>
      <a href="contacto.html" class="boton-amarillo">Contactanos</a>
    </section>
    <!-- BLOG  -->
    <div class="contenedor seccion seccion-inferior">
      <section class="blog">
        <h3>Nuestro Blog</h3>
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
              <p class="infomracion-meta">
                Escrito el: <span>12/06/2024</span> por: <span>Admin</span>
              </p>
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
              <p class="infomracion-meta">
                Escrito el: <span>18/06/2024</span> por: <span>Admin</span>
              </p>
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
      </section>
      <!-- TESTIMONIOS  -->
      <div class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
          <blockquote>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus
            libero delectus totam corrupti inventore hic
          </blockquote>
          <p>- Pablo Martinez</p>
        </div>
      </div>
    </div>

 <?php
  incluirTemplate('footer');
?>

