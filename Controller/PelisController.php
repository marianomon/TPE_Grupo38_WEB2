<?php

require_once "../view/PeliculasView.php";
require_once "../model/PelisModel.php";
require_once "../model/GeneroModel.php";


class PelisController
{
  private $view;
  private $model;
  private $GeneroModel;
  private $Titulo;

  function __construct()
  {
    $this->view = new PeliculasView();
    $this->Titulo = "Bienvenido a MisPelis!!";
    $this->model = new PelisModel();
    $this->GeneroModel = new GeneroModel();

  }

function Home(){
    $Peliculas = $this->model->GetPeliculas();
    $Generos = $this->model->GetGeneros();
    $this->view->Mostrar($this->Titulo, $Peliculas, $Generos);
}

function GenerarGenero($PARAMS){
  $Peliculas = $this->model->GetPeliculasFiltradas($PARAMS);
  $Generos = $this->GeneroModel->GetGeneros();
  $GeneroSeleccionado = $this->GeneroModel->GetGeneroSeleccionado($PARAMS);
  $this->view->GeneroFiltrado($this->Titulo, $Peliculas, $Generos, $GeneroSeleccionado);
}

function PeliculaSeleccionada($param){
  $Peliculas = $this->model->MostrarPeliculaAdmin($param[0]);
  $NombreDeGenero = $this->GeneroModel->GetNombreDeGeneroDePelicula($param[1]);
  $Generos = $this->GeneroModel->GetGeneros();
  $this->view->MostrarPelicula($this->Titulo, $Peliculas, $Generos, $NombreDeGenero);

}

function MostrarEstrenos(){
  $PeliculasEstrenos = $this->model->BuscarEstrenos();
  $Generos = $this->GeneroModel->GetGeneros();
  $this->view->MostrarEstrenosView($this->Titulo, $PeliculasEstrenos, $Generos);
}







  // function MostrarPeliculaAdmin($param){
  //   $Peliculas = $this->model->MostrarPeliculaAdmin($param[0]);
  //   $Generos = $this->model->GetGeneros();
  //   $this->view->MostrarPeliculaAdmin($this->Titulo, $Peliculas, $Generos);
  // }
  //
  // function BorrarPelicula($param){
  //   $this->model->BorrarPelicula($param[0]);
  // }
  //
  // function ActualizarPelicula($param){
  //   $sinopsis = $_POST["Editado"];
  //   $this->model->ActualizarMovie($param, $sinopsis);
  // }
  //
  // function PelisAdmin(){
  //   $Peliculas = $this->model->GetPeliculas();
  //   $Generos = $this->model->GetGeneros();
  //   $this->view->MostrarAdmin($this->Titulo, $Peliculas, $Generos);
  // }
}

 ?>
