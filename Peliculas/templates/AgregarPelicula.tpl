{include file="HeaderAdmin.tpl"}
<div class="container-fluid FondoGrisOscuro">
  <h1 class="LetrasBlancas">Agregar Pelicula</h1>
  <div class="row justify-content-md-center">

        <form method="post" action="AgregarPelicula" enctype="multipart/form-data" class="col-4 FondoGrisOscuro">
          <div class="form-group padding15px">
            <input type="file" name="EditadoImg" value="">
            <input type="input" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Insertar Nombre de la Pelicula...">
          </div>
          <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01" name="genero">
                    <option selected>Elegir Genero</option>
                    {foreach from=$Generos item=genero}
                    <option value="{$genero['id_genero']}">{$genero['nombre']}</option>
                    {/foreach}

                  </select>
                </div>

          <div class="input-group padding15px">
            <div class="input-group-prepend">
              <span class="input-group-text">Sinopsis</span>
            </div>
            <textarea class="form-control" aria-label="Sinopsis" name="sinopsis" placeholder="Inserte Sinopsis"></textarea>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Actores</span>
            </div>
              <input type="text" name="actores" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Inserte los Actores">
            </div>

            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1" name="EstrenoCheck">
              <label class="custom-control-label LetrasBlancas" for="customCheck1">¿Es un Estreno?</label>
            </div>

            <div class="input-group padding15px">
              <div class="input-group-prepend">
                <span class="input-group-text">iFrame</span>
              </div>
              <textarea class="form-control" aria-label="iFrame" name="iFrame" placeholder="Coloque aquí el iFrame"></textarea>
            </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>

  </div>
</div>
{include file="Footer.tpl"}
