{include file="header.tpl"}

  <div class="container-fluid contenedor FondoGrisOscuro">
    <div class="row justify-content-md-center">
      <div class="col-9 estrenos fondoGrisClaro">

        <h1 class="LetrasBlancas LetrasGrandes"><img src="imagenes/star-icon.png" alt="">Estrenos<img src="imagenes/star-icon.png" alt=""></h1>
        <div class="row">
        {foreach from=$PeliculasEstrenos item=pelicula}
          <div class="col-3 RecuadroPelicula">
            <a href="{$root}/PeliculaSeleccionada/{$pelicula['id_pelicula']}/{$pelicula['id_genero']}">
              <img class="imagendepelicula" src="imagenes/{$pelicula['id_pelicula']}.jpg" alt="">
              <div class="TituloPelicula">
                {$pelicula['nombre']}
              </div>
            </a>
          </div>
        {/foreach}
      </div>
      </div>
    </div>
  </div>

{include file="Footer.tpl"}









    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
