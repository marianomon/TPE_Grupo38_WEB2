{include file="HeaderAdmin.tpl"}

<div class="container-fluid FondoGrisOscuro">
  <h1 class="LetrasBlancas">Agregar Pelicula</h1>
  <div class="row justify-content-md-center">

        <form method="post" action="AgregarGenero" class="col-4 FondoGrisOscuro">
          <div class="form-group padding15px">
            <input type="input" class="form-control" id="nombreGenero" name="nombreGenero" aria-describedby="emailHelp" placeholder="Insertar Nombre del Genero...">
          </div>

          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>

  </div>
</div>
{include file="Footer.tpl"}
