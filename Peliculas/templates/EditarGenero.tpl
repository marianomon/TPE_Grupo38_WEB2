{include file="HeaderAdmin.tpl"}


<div class="row justify-content-md-center FondoGrisOscuro">
{foreach from=$Generos item=genero}
<form method="post" action="EditarGenero/{$genero['id_genero']}" class="col-2 fondoGrisClaro">
  <div class="form-group padding15px">
    <input type="input" class="form-control" id="EditadoNombreGenero" name="EditadoNombreGenero" value="{$genero['nombre']}">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>

</form>
{/foreach}
</div>
{include file="Footer.tpl"}
