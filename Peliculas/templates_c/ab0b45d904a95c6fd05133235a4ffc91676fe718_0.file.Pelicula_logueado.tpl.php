<?php
/* Smarty version 3.1.33, created on 2018-11-22 03:41:50
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\Pelicula_logueado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6176e5598e3_54615479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab0b45d904a95c6fd05133235a4ffc91676fe718' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\Pelicula_logueado.tpl',
      1 => 1542854507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header_logueado.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bf6176e5598e3_54615479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header_logueado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid contenedor FondoGrisOscuro">
  <input type="hidden" id="nombreUserLog" value="<?php echo $_smarty_tpl->tpl_vars['NombreUserLogueado']->value;?>
">
  <input type="hidden" id="idUsuarioLog" value="<?php echo $_smarty_tpl->tpl_vars['idUsuarioLog']->value;?>
">
  <input type="hidden" id="esAdmin" value="Logueado">

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>

  <input type="hidden" id="id_pelicula" value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
">
  <div class="row justify-content-md-center">
        <div class="col-2 padding15px fondoGrisClaro">
          <img class="imagendepelicula" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/imagenes/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
.jpg" alt="">
        </div>

        <div class="col-5 LetrasBlancas padding15px fondoGrisClaro">
          <h1 class="NombrePelicula LetrasBlancas"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>
</h1>
          <p class="LetrasMedianas LetrasBlancas">Sinopsis: <span class="LetrasMedianas"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['sinopsis'];?>
</span></p>
          <p class="LetrasChicas LetrasBlancas">Actores: <span class="LetrasChicas"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['actores'];?>
</span></p>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NombreGeneroDePelicula']->value, 'NombreDeGenero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NombreDeGenero']->value) {
?>
            <p class="LetrasChicas LetrasBlancas">Género: <span class="LetrasChicas"><?php echo $_smarty_tpl->tpl_vars['NombreDeGenero']->value['nombre'];?>
</span></p>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <div class="col-7 CuadroIframe fondoGrisClaro">
          <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['iFrame'];?>

        </div>
        <div class="col-7 Caja-comentarios fondoGrisClaro LetrasBlancas">
            <h3>Comentarios:</h3>
          <div id="contenedor-Comentarios" class="col-9 Caja-comentarios fondoGrisClaro">
            <!-- aca va el handlebars -->
          </div>
      </div>
  </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
  <?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
