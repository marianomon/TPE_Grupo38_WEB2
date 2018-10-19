<?php
/* Smarty version 3.1.33, created on 2018-10-19 01:23:07
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\AgregarPelicula.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc915db870d95_23755343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f68bdf84edb2c7c9bb6a0dc344ef221122fe9f22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\AgregarPelicula.tpl',
      1 => 1539742578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:HeaderAdmin.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bc915db870d95_23755343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:HeaderAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid FondoGrisOscuro">
  <h1 class="LetrasBlancas">Agregar Pelicula</h1>
  <div class="row justify-content-md-center">

        <form method="post" action="AgregarPelicula" class="col-4 FondoGrisOscuro">
          <div class="form-group padding15px">
            <input type="input" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Insertar Nombre de la Pelicula...">
          </div>
          <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01" name="genero">
                    <option selected>Elegir Genero</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
