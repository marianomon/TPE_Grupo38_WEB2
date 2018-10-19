<?php
/* Smarty version 3.1.33, created on 2018-10-19 00:50:07
  from 'C:\xampp\htdocs\proyectos\Grupo 38 - Murillo Álvaro - Montero Mariano\Peliculas\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc90e1fbfb949_53127503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f452d879acfeadb39b1138251e38d4002f42197' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo 38 - Murillo Álvaro - Montero Mariano\\Peliculas\\templates\\home.tpl',
      1 => 1539742598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bc90e1fbfb949_53127503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
          <div class="col-2 RecuadroPelicula">
            <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/PeliculaSeleccionada/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_genero'];?>
">
              <img class="imagendepelicula" src="imagenes/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
.jpg"  alt="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>
">
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
