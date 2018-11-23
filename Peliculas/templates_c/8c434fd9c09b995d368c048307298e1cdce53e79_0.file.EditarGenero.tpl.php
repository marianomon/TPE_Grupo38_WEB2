<?php
/* Smarty version 3.1.33, created on 2018-10-25 21:09:52
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\EditarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd21500a9d123_39924252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c434fd9c09b995d368c048307298e1cdce53e79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\EditarGenero.tpl',
      1 => 1540492887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:HeaderAdmin.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bd21500a9d123_39924252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:HeaderAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row justify-content-md-center FondoGrisOscuro">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
<form method="post" action="EditarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
" class="col-2 fondoGrisClaro">
  <div class="form-group padding15px">
    <input type="input" class="form-control" id="EditadoNombreGenero" name="EditadoNombreGenero" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>

</form>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
