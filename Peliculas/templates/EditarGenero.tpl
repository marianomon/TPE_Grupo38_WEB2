{include file="HeaderAdmin.tpl"}

{foreach from=$Generos item=genero}
<form method="post" action="EditarGenero/{$genero['id_genero']}" class="FondoGrisOscuro">

  <div class="row justify-content-md-center">
  <div class="form-group col-2 padding15px margin-1 fondoGrisClaro">
    <textarea class="form-control" aria-label="Nombre" name="EditadoNombreGenero">{$genero['nombre']}</textarea>
    <a href="borrarGenero/{$genero['nombre']}">Borrar</a>

  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>

</form>
{/foreach}






{include file="Footer.tpl"}
