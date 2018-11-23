{include file="HeaderAdmin.tpl"}

<div class="container-fluid contenedor FondoGrisOscuro">
  <input type="hidden" id="nombreUserLog" value="{$NombreUserLogueado}">
  <input type="hidden" id="idUsuarioLog" value="{$idUsuarioLog}">
  <input type="hidden" id="esAdmin" value="1">


  {foreach from=$Peliculas item=pelicula}
  <input type="hidden" id="id_pelicula" value="{$pelicula['id_pelicula']}">
    <form method="post" action="{$root}/ActualizarPelicula/{$pelicula['id_pelicula']}/{$pelicula['id_genero']}" enctype="multipart/form-data" class="FondoGrisOscuro">
      <div class="row justify-content-md-center">
      <div class="form-group col-2 padding15px margin-1 fondoGrisClaro">
        <input type="file" name="EditadoImg" value="">
        <!-- <img class="imagendepelicula padding-bottom" src="{$root}/imagenes/{$pelicula['id_pelicula']}.jpg" alt=""> -->
        <img class="imagendepelicula padding-bottom" src="{$pelicula['imagen']}" alt="">
        <textarea class="form-control" aria-label="Nombre" name="EditadoNombre" placeholder="Insertar Nombre de la Pelicula...">{$pelicula['nombre']}</textarea>
        <!-- <input type="input" class="form-control" id="EditadoNombre" name="EditadoNombre" aria-describedby="emailHelp" placeholder="Insertar Nombre de la Pelicula..."> -->
      </div>

      <div class="col-5 fondoGrisClaro">

        <div class="input-group  padding-top height-sinopsis">
          <div class="input-group-prepend">
            <span class="input-group-text">Sinopsis</span>
          </div>
          <textarea class="form-control" aria-label="Sinopsis" name="EditadoSinopsis" placeholder="Inserte Sinopsis">{$pelicula['sinopsis']}</textarea>
        </div>

        <div class="input-group mb-3 padding-top">
          <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Actores</span>
          </div>
            <textarea class="form-control" aria-label="actores" name="EditadoActores" placeholder="Coloque aquí el iFrame">{$pelicula['actores']}</textarea>
            <!-- <input type="text" name="EditadoActores" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Inserte los Actores"> -->
          </div>
      </div>

      <div class="col-7 fondoGrisClaro padding-bottom">

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Género</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="EditadoGenero">
            {foreach from=$NombreGeneroDePelicula item=generoseleccionado}

            <option selected>{$generoseleccionado['nombre']}</option>
            {/foreach}
            {foreach from=$Generos item=genero}
            <option value="{$genero['id_genero']}">{$genero['nombre']}</option>
            {/foreach}
          </select>
        </div>

        {$pelicula['iFrame']}

        <div class="input-group padding15px">
          <div class="input-group-prepend">
            <span class="input-group-text">iFrame</span>
          </div>
          <textarea class="form-control" aria-label="iFrame" name="EditadoiFrame" placeholder="Coloque aquí el iFrame">{$pelicula['iFrame']}</textarea>
        </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
  </form>
  {/foreach}
  <div class="row justify-content-md-center">
    <div class="col-7 Caja-comentarios fondoGrisClaro LetrasBlancas">
        <h3>Comentarios:</h3>
      <div id="contenedor-Comentarios" class="col-9 Caja-comentarios fondoGrisClaro">
        <!-- aca va el handlebars -->
      </div>
    </div>
  </div>
</div>
  {include file="Footer.tpl"}
