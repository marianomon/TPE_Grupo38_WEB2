<?php
/* Smarty version 3.1.33, created on 2018-11-20 19:19:33
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\LogIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf45035536267_70857995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef77026bbe2ff15b1b7e8b662ffc81e365b3448a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\LogIn.tpl',
      1 => 1542737971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5bf45035536267_70857995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid FondoGrisOscuro LetrasBlancas">
  <div class="row justify-content-md-center">
    <div class="col-5 FormLog">

        <form method="post" action="verificarLogin">
          <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="input" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Entrar Usuario">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Password">
            <?php echo $_smarty_tpl->tpl_vars['Mensaje_Error']->value;?>

          </div>
          <button type="submit" class="btn btn-primary">LogIn</button>
          <button id="Boton-Registrarse" class="btn btn-primary" type="button" name="button">Registrarse</button>
        </form>
      </div>
    </div>

  </div>
</div>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/SecondaryJS.js" type="text/javascript"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
