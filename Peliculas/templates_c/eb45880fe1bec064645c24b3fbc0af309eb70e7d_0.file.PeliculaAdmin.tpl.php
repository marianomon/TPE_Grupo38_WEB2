<?php
/* Smarty version 3.1.33, created on 2018-11-23 01:11:07
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\PeliculaAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf7459b4441e5_90046605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb45880fe1bec064645c24b3fbc0af309eb70e7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\PeliculaAdmin.tpl',
      1 => 1542931863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:HeaderAdmin.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bf7459b4441e5_90046605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:HeaderAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid contenedor FondoGrisOscuro">
  <input type="hidden" id="nombreUserLog" value="<?php echo $_smarty_tpl->tpl_vars['NombreUserLogueado']->value;?>
">
  <input type="hidden" id="idUsuarioLog" value="<?php echo $_smarty_tpl->tpl_vars['idUsuarioLog']->value;?>
">
  <input type="hidden" id="esAdmin" value="1">


  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Peliculas']->value, 'pelicula');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
?>
  <input type="hidden" id="id_pelicula" value="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
">
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/ActualizarPelicula/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_genero'];?>
" enctype="multipart/form-data" class="FondoGrisOscuro">
      <div class="row justify-content-md-center">
      <div class="form-group col-2 padding15px margin-1 fondoGrisClaro">
        <input type="file" name="EditadoImg" value="">
        <!-- <img class="imagendepelicula padding-bottom" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/imagenes/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
.jpg" alt=""> -->
        <img class="imagendepelicula padding-bottom" src="<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['imagen'];?>
" alt="">
        <textarea class="form-control" aria-label="Nombre" name="EditadoNombre" placeholder="Insertar Nombre de la Pelicula..."><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['nombre'];?>
</textarea>
        <!-- <input type="input" class="form-control" id="EditadoNombre" name="EditadoNombre" aria-describedby="emailHelp" placeholder="Insertar Nombre de la Pelicula..."> -->
      </div>

      <div class="col-5 fondoGrisClaro">

        <div class="input-group  padding-top height-sinopsis">
          <div class="input-group-prepend">
            <span class="input-group-text">Sinopsis</span>
          </div>
          <textarea class="form-control" aria-label="Sinopsis" name="EditadoSinopsis" placeholder="Inserte Sinopsis"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['sinopsis'];?>
</textarea>
        </div>

        <div class="input-group mb-3 padding-top">
          <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Actores</span>
          </div>
            <textarea class="form-control" aria-label="actores" name="EditadoActores" placeholder="Coloque aquí el iFrame"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['actores'];?>
</textarea>
            <!-- <input type="text" name="EditadoActores" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Inserte los Actores"> -->
          </div>
      </div>

      <div class="col-7 fondoGrisClaro padding-bottom">

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Género</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="EditadoGenero">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NombreGeneroDePelicula']->value, 'generoseleccionado');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['generoseleccionado']->value) {
?>

            <option selected><?php echo $_smarty_tpl->tpl_vars['generoseleccionado']->value['nombre'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

        <?php echo $_smarty_tpl->tpl_vars['pelicula']->value['iFrame'];?>


        <div class="input-group padding15px">
          <div class="input-group-prepend">
            <span class="input-group-text">iFrame</span>
          </div>
          <textarea class="form-control" aria-label="iFrame" name="EditadoiFrame" placeholder="Coloque aquí el iFrame"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value['iFrame'];?>
</textarea>
        </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
  </form>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <div class="row justify-content-md-center">
    <div class="col-7 Caja-comentarios fondoGrisClaro LetrasBlancas">
        <h3>Comentarios:</h3>
      <div id="contenedor-Comentarios" class="col-9 Caja-comentarios fondoGrisClaro">
        <!-- aca va el handlebars -->
      </div>
    </div>
  </div>
</div>
  <?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
