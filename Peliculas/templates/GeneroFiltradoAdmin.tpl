{include file="HeaderAdmin.tpl"}

<div class="container-fluid contenedor FondoGrisOscuro">
  {foreach from=$GeneroSeleccionado item=GeneroSelec}
    <h1 class="LetrasBlancas">{$GeneroSelec['nombre']}</h1>
  {/foreach}
  <div class="row justify-content-md-center">
    {foreach from=$Peliculas item=pelicula}
          <div class="col-2 RecuadroPelicula">
            <a href="borrar/{$pelicula['id_pelicula']}">
              Borrar
            </a>
            <a class="TituloPelicula" href="{$root}/PeliculaSeleccionadaAdmin/{$pelicula['id_pelicula']}/{$pelicula['id_genero']}">
              <img class="imagendepelicula" src="imagenes/{$pelicula['id_pelicula']}.jpg" alt="">
              {$pelicula['nombre']}
            </a>
          </div>
    {/foreach}
  </div>
</div>
  {include file="Footer.tpl"}
