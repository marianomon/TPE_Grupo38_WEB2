<?php
/* Smarty version 3.1.33, created on 2018-10-19 01:23:10
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\EstrenosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc915de507ef7_20298315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3d4bc7dbe97c927a3465ab02e8f1c4ea13ce198' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\EstrenosAdmin.tpl',
      1 => 1539898344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:HeaderAdmin.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bc915de507ef7_20298315 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:HeaderAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="container-fluid contenedor FondoGrisOscuro">
    <div class="row justify-content-md-center">
      <div class="col-9 estrenos fondoGrisClaro">

        <h1 class="LetrasBlancas LetrasGrandes"><img src="imagenes/star-icon.png" alt="">Estrenos<img src="imagenes/star-icon.png" alt=""></h1>
        <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PeliculasEstrenos']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
          <div class="col-3 RecuadroPelicula">
            <a href="PeliculaSeleccionadaAdmin/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_genero'];?>
">
              <img class="imagendepelicula" src="imagenes/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
.jpg" alt="">
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
    </div>
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
