<?php
/* Smarty version 3.1.33, created on 2018-10-25 20:17:38
  from 'C:\xampp\htdocs\proyectos\TPE-Grupo38-MurilloAlvaro-MonteroMariano-master\TPE-Grupo38-MurilloAlvaro-MonteroMariano-master\Peliculas\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd208c23bd252_74447846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38a651071cc61c527215c6a4a523fc0f30c155a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-Grupo38-MurilloAlvaro-MonteroMariano-master\\TPE-Grupo38-MurilloAlvaro-MonteroMariano-master\\Peliculas\\templates\\home.tpl',
      1 => 1540315802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bd208c23bd252_74447846 (Smarty_Internal_Template $_smarty_tpl) {
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
