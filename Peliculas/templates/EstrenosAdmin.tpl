{include file="HeaderAdmin.tpl"}

  <div class="container-fluid contenedor FondoGrisOscuro">
    <div class="row justify-content-md-center">
      <div class="col-9 estrenos fondoGrisClaro">

        <h1 class="LetrasBlancas LetrasGrandes"><img src="imagenes/star-icon.png" alt="">Estrenos<img src="imagenes/star-icon.png" alt=""></h1>
        <div class="row">
        {foreach from=$PeliculasEstrenos item=pelicula}
          <div class="col-3 RecuadroPelicula">
            <a href="PeliculaSeleccionadaAdmin/{$pelicula['id_pelicula']}/{$pelicula['id_genero']}">
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
