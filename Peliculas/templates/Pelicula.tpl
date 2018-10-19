{include file="header.tpl"}

<div class="container-fluid contenedor FondoGrisOscuro">
  {foreach from=$Peliculas item=pelicula}
  <div class="row justify-content-md-center">
        <div class="col-2 padding15px fondoGrisClaro">
          <img class="imagendepelicula" src="{$root}/imagenes/{$pelicula['id_pelicula']}.jpg" alt="">
        </div>

        <div class="col-5 LetrasBlancas padding15px fondoGrisClaro">
          <h1 class="NombrePelicula LetrasBlancas">{$pelicula['nombre']}</h1>
          <p class="LetrasMedianas LetrasBlancas">Sinopsis: <span class="LetrasMedianas">{$pelicula['sinopsis']}</span></p>
          <p class="LetrasChicas LetrasBlancas">Actores: <span class="LetrasChicas">{$pelicula['actores']}</span></p>
          {foreach from=$NombreGeneroDePelicula item=NombreDeGenero}
            <p class="LetrasChicas LetrasBlancas">Género: <span class="LetrasChicas">{$NombreDeGenero['nombre']}</span></p>
          {/foreach}
        </div>

        <div class="col-7 CuadroIframe fondoGrisClaro">
          {$pelicula['iFrame']}
        </div>
  </div>
  {/foreach}
</div>
  {include file="Footer.tpl"}
