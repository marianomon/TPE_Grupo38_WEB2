<?php
/* Smarty version 3.1.33, created on 2018-10-19 02:40:55
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\HeaderAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc9281756e825_21304250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc31adac7f1813e64be8d129468b64c90aba3935' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\HeaderAdmin.tpl',
      1 => 1539909654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc9281756e825_21304250 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/admin">MisPelis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/admin>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/estrenosadmin">Estrenos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Género
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/generoAdmin/<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
"> <?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
</a>
            <a href="borrarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
">X</a>
            <div class="dropdown-divider"></div>

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/FormularioAgregarPelicula">Agregar Pelicula</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/FormularioAgregarGenero">Agregar Genero</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/FormularioEditarGenero">Editar Genero</a>
      </li>
    </ul>
      <a type="button" href=<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/LogOut class="btn btn-primary nav-link">LogOut</a>
  </div>
</nav>
<?php }
}
