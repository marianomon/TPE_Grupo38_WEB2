<?php
/* Smarty version 3.1.33, created on 2018-11-23 01:07:55
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\Home_logueado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf744dbf24d24_46443202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ea67e0b9241be30b85dbf431a886c681ee15bf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\Home_logueado.tpl',
      1 => 1542931366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header_logueado.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bf744dbf24d24_46443202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header_logueado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container-fluid contenedor FondoGrisOscuro">
    <h1 class="Titulo LetrasBlancas"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <div id="contenedorPeliculas" class="row justify-content-md-center">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
            <div class="col-2 RecuadroPelicula">
              <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/PeliculaSeleccionada_logueado/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_genero'];?>
">
                <img class="imagendepelicula" src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['imagen'];?>
" alt="">
              <div class="TituloPelicula">
                <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>

              </div>
              </a>
            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
