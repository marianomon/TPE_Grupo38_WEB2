<?php
/* Smarty version 3.1.33, created on 2018-10-19 01:08:08
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-Montero Mariano\Peliculas\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc912582d7b67_76198984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aacad6676b9bef9251bd661b71796c4846ffd13a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-Montero Mariano\\Peliculas\\templates\\header.tpl',
      1 => 1539904087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc912582d7b67_76198984 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/home">MisPelis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/estrenos">Estrenos</a>
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
            <a class="dropdown-item" href=<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/genero/<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_genero'];?>
> <?php echo $_smarty_tpl->tpl_vars['genero']->value['nombre'];?>
</a>
            <div class="dropdown-divider"></div>

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </li>
    </ul>
      <a type="button" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/LogIn" class="btn btn-primary">LogIn</a>
  </div>
</nav>
<?php }
}
