<?php
/* Smarty version 3.1.33, created on 2018-10-19 01:15:43
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\Estrenos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc9141ff13536_76437325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e169020226bcfcdcfd61c4d5bf8f1d99816de9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\Estrenos.tpl',
      1 => 1539904534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bc9141ff13536_76437325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
            <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/PeliculaSeleccionada/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value['id_pelicula'];?>
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
?>









    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
