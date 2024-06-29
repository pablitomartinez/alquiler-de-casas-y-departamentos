<?php
  require '../../includes/funciones.php';
  incluirTemplate('header');
?>
    <!-- MAIN  -->
    <main class="contenedor seccion">
      <h1>Crear</h1>
      <a href="/bienesraices/admin/index.php" class="boton boton-verde"> Volver </a>


      <form class="formulario">
        <fieldset>

            <legend>Informacion Gnereal</legend>
    
            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" placeholder="Titulo Propiedad">
    
            <label for="precio">Precio</label>
            <input type="number" id="precio" placeholder="Precio Propiedad">
    
            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" placeholder="Imagen Propiedad">
    
            <label for="descipcion">Descripcion</label>
            <textarea id="descipcion"> </textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" placeholder="Ej: 3 " min='1'  max='9' >

            <label for="wc">Ba;os</label>
            <input type="number" id="wc" placeholder="Ej: 3 " min='1'  max='9' >

            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" id="estacionamiento" placeholder="Ej: 3 " min='1'  max='9' >
        </fieldset>

        <fieldset>
            <legend>Informacion Vendedor</legend>

            <select name="" value="1">Juan</select>
            <select name="" value="2">Pedro</select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde" >
      </form>
    </main>
    <!-- FOOTER  -->
<?php
  incluirTemplate('footer');
?>