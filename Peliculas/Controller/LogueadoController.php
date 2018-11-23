<?php

require_once "view/PeliculasView.php";
require_once "model/PelisModel.php";
require_once "model/GeneroModel.php";
require_once "SecuredController.php";
require_once "Model/LoginModel.php";

class LogueadoController extends SecuredController{
  private $view;
  private $model;
  private $GeneroModel;
  private $Titulo;
  private $loginModel;

  function __construct()
  {
    parent::__construct();
    $this->view = new PeliculasView();
    $this->Titulo = "Bienvenido " . $_SESSION["usuario"]. "!!";
    $this->model = new PelisModel();
    $this->GeneroModel = new GeneroModel();
    $this->loginModel = new loginModel();

  }

function Home(){
    $Peliculas = $this->model->GetPeliculas();
    $Generos = $this->GeneroModel->GetGeneros();
    $this->view->Mostrar_logueado($this->Titulo, $Peliculas, $Generos);
}

function GenerarGenero($PARAMS){
  $Peliculas = $this->model->GetPeliculasFiltradas($PARAMS);
  $Generos = $this->GeneroModel->GetGeneros();
  $GeneroSeleccionado = $this->GeneroModel->GetGeneroSeleccionado($PARAMS);
  $this->view->GeneroFiltrado($this->Titulo, $Peliculas, $Generos, $GeneroSeleccionado);
}
function GenerarGenero_logueado($PARAMS){
  $Peliculas = $this->model->GetPeliculasFiltradas($PARAMS);
  $Generos = $this->GeneroModel->GetGeneros();
  $GeneroSeleccionado = $this->GeneroModel->GetGeneroSeleccionado($PARAMS);
  $this->view->GeneroFiltrado_logueado($this->Titulo, $Peliculas, $Generos, $GeneroSeleccionado);
}

function PeliculaSeleccionada($param){
  $Peliculas = $this->model->MostrarPeliculaAdmin($param[0]);
  $NombreDeGenero = $this->GeneroModel->GetNombreDeGeneroDePelicula($param[1]);
  $Generos = $this->GeneroModel->GetGeneros();
  $this->view->MostrarPelicula($this->Titulo, $Peliculas, $Generos, $NombreDeGenero);
}

function PeliculaSeleccionada_logueado($param){
  $Peliculas = $this->model->MostrarPeliculaAdmin($param[0]);
  $NombreDeGenero = $this->GeneroModel->GetNombreDeGeneroDePelicula($param[1]);
  $Generos = $this->GeneroModel->GetGeneros();
  $idUsuarioLog = $this->loginModel->getUser($_SESSION["usuario"]);
  $this->view->MostrarPelicula_logueado($this->Titulo, $Peliculas, $Generos, $NombreDeGenero, $_SESSION["usuario"], $idUsuarioLog);
}

function MostrarEstrenos(){
  $PeliculasEstrenos = $this->model->BuscarEstrenos();
  $Generos = $this->GeneroModel->GetGeneros();
  $this->view->MostrarEstrenosView($this->Titulo, $PeliculasEstrenos, $Generos);
}

function MostrarEstrenos_logueado(){
  $PeliculasEstrenos = $this->model->BuscarEstrenos();
  $Generos = $this->GeneroModel->GetGeneros();
  $this->view->MostrarEstrenosView_logueado($this->Titulo, $PeliculasEstrenos, $Generos);
}

}

 ?>
