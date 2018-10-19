<?php
/* Smarty version 3.1.33, created on 2018-10-19 01:19:51
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\homeadmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc91517d87668_01352564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95dfb9afa2f665158ae94371ddbfe70e97f01f4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\homeadmin.tpl',
      1 => 1539744155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:HeaderAdmin.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bc91517d87668_01352564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:HeaderAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid contenedor FondoGrisOscuro">
  <h1 class="Titulo LetrasBlancas"><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
  <div class="row justify-content-md-center">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
          <div class="col-2 RecuadroPelicula TituloPelicula">
            <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
">
              Borrar
            </a>
              <a class="TituloPelicula" href="PeliculaSeleccionadaAdmin/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_genero'];?>
">
                <img class="imagendepelicula" src="imagenes/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
.jpg" alt="">
              <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>

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
