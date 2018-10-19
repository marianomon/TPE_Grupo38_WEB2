<?php
/* Smarty version 3.1.33, created on 2018-10-18 23:32:31
  from 'C:\xampp\htdocs\proyectos\PDO\Peliculas\templates\EstrenosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8fbef9ff6e3_39761943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '898a6da8d5fb31d5b10fb73c8f369a3ab37ecbe8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PDO\\Peliculas\\templates\\EstrenosAdmin.tpl',
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
function content_5bc8fbef9ff6e3_39761943 (Smarty_Internal_Template $_smarty_tpl) {
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
