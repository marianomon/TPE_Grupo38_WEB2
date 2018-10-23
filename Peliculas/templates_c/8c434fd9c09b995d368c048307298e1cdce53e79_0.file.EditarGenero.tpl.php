<?php
/* Smarty version 3.1.33, created on 2018-10-19 22:41:53
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\EditarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bca41913c04f1_94789695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c434fd9c09b995d368c048307298e1cdce53e79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\EditarGenero.tpl',
      1 => 1539981709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:HeaderAdmin.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bca41913c04f1_94789695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:HeaderAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form method="post" action="EditarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
" class="FondoGrisOscuro">

  <div class="row justify-content-md-center fondoGrisClaro">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
      <div class="form-group col-2 padding15px margin-1 ">
        <textarea class="form-control" aria-label="Nombre" name="EditadoNombreGenero"><?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
</textarea>
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  <div class="row justify-content-md-center fondoGrisClaro">
    <div class="col-1 padding15px">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>








<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
