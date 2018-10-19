<?php
/* Smarty version 3.1.33, created on 2018-10-19 01:53:43
  from 'C:\xampp\htdocs\proyectos\Grupo38-MurilloÁlvaro-MonteroMariano\Peliculas\templates\AgregarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc91d07971a58_81256810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd1125258996472c9e013fec33b20e66ebbd07f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Grupo38-MurilloÁlvaro-MonteroMariano\\Peliculas\\templates\\AgregarGenero.tpl',
      1 => 1539906449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:HeaderAdmin.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_5bc91d07971a58_81256810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:HeaderAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid FondoGrisOscuro">
  <h1 class="LetrasBlancas">Agregar Pelicula</h1>
  <div class="row justify-content-md-center">

        <form method="post" action="AgregarGenero" class="col-4 FondoGrisOscuro">
          <div class="form-group padding15px">
            <input type="input" class="form-control" id="nombreGenero" name="nombreGenero" aria-describedby="emailHelp" placeholder="Insertar Nombre del Genero...">
          </div>

          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>

  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
