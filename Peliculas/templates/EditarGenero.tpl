{include file="HeaderAdmin.tpl"}

<form method="post" action="EditarGenero/{$genero['id_genero']}" class="FondoGrisOscuro">

  <div class="row justify-content-md-center fondoGrisClaro">
    {foreach from=$Generos item=genero}
      <div class="form-group col-2 padding15px margin-1 ">
        <textarea class="form-control" aria-label="Nombre" name="EditadoNombreGenero">{$genero['nombre']}</textarea>
      </div>
    {/foreach}
  </div>
  <div class="row justify-content-md-center fondoGrisClaro">
    <div class="col-1 padding15px">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>








{include file="Footer.tpl"}
