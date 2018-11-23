<?php

require('libs/Smarty.class.php');

class PeliculasView
{
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
    $r = $this->Smarty->assign('root', "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function Mostrar($Titulo, $Peliculas, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/home.tpl');
  }

  function Mostrar_logueado($Titulo, $Peliculas, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/Home_logueado.tpl');
  }


  function GeneroFiltradoAdmin($Titulo, $Peliculas, $Generos, $GeneroSeleccionado){
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->assign('GeneroSeleccionado',$GeneroSeleccionado);
    $this->Smarty->display('templates/GeneroFiltradoAdmin.tpl');
  }


  function MostrarFormularioAgregarPelicula($Titulo, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/AgregarPelicula.tpl');
  }

  function MostrarAdmin($Titulo, $Peliculas, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/homeadmin.tpl');
  }

  function MostrarPelicula($Titulo, $Peliculas, $Generos, $NombreGeneroDePelicula){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('NombreGeneroDePelicula', $NombreGeneroDePelicula);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/Pelicula.tpl');
  }

  function MostrarPelicula_logueado($Titulo, $Peliculas, $Generos, $NombreGeneroDePelicula, $NombreUserLogueado, $idUsuarioLog){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('NombreGeneroDePelicula', $NombreGeneroDePelicula);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->assign('NombreUserLogueado', $NombreUserLogueado);
    $this->Smarty->assign('idUsuarioLog', $idUsuarioLog[0]["id_usuario"]);
    $this->Smarty->display('templates/Pelicula_logueado.tpl');
  }

  function MostrarPeliculaAdmin($Titulo, $Peliculas, $Generos, $NombreGeneroDePelicula, $NombreUserLogueado, $idUsuarioLog){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->assign('NombreGeneroDePelicula', $NombreGeneroDePelicula);
    $this->Smarty->assign('NombreUserLogueado', $NombreUserLogueado);
    $this->Smarty->assign('idUsuarioLog', $idUsuarioLog[0]["id_usuario"]);
    $this->Smarty->display('templates/PeliculaAdmin.tpl');
  }

  function GeneroFiltrado($Titulo, $Peliculas, $Generos, $GeneroSeleccionado){
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->assign('GeneroSeleccionado',$GeneroSeleccionado);
    $this->Smarty->display('templates/PeliculaFiltrada.tpl');
  }

  function GeneroFiltrado_logueado($Titulo, $Peliculas, $Generos, $GeneroSeleccionado){
    $this->Smarty->assign('Peliculas',$Peliculas);
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->assign('GeneroSeleccionado',$GeneroSeleccionado);
    $this->Smarty->display('templates/PeliculaFiltrada_logueado.tpl');
  }

  function MostrarFormularioAgregarGenero($Titulo, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/AgregarGenero.tpl');
  }

  function MostrarFormularioEditarGenero($Titulo, $Generos){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/EditarGenero.tpl');
  }

  function MostrarEstrenosView($Titulo, $PeliculasEstrenos, $Generos){
    $this->Smarty->assign('PeliculasEstrenos',$PeliculasEstrenos);
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/Estrenos.tpl');
  }

  function MostrarEstrenosView_logueado($Titulo, $PeliculasEstrenos, $Generos){
    $this->Smarty->assign('PeliculasEstrenos',$PeliculasEstrenos);
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/Estrenos_logueado.tpl');
  }

  function MostrarEstrenosViewAdmin($Titulo, $PeliculasEstrenos, $Generos){
    $this->Smarty->assign('PeliculasEstrenos',$PeliculasEstrenos);
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('Generos',$Generos);
    $this->Smarty->display('templates/EstrenosAdmin.tpl');
  }
}
  ?>
