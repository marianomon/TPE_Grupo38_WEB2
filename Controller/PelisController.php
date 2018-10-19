<?php

require_once "../view/PeliculasView.php";
require_once "../model/PelisModel.php";


class PelisController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new PeliculasView();
    $this->Titulo = "Bienvenido a MisPelis!!";
    $this->model = new PelisModel();
  }

function Home(){
    $Peliculas = $this->model->GetPeliculas();
    $Generos = $this->model->GetGeneros();
    $this->view->Mostrar($this->Titulo, $Peliculas, $Generos);
}

function GenerarGenero($PARAMS){
  $Peliculas = $this->model->GetPeliculasFiltradas($PARAMS);
  $Generos = $this->model->GetGeneros();
  $GeneroSeleccionado = $this->model->GetGeneroSeleccionado($PARAMS);
  $this->view->GeneroFiltrado($this->Titulo, $Peliculas, $Generos, $GeneroSeleccionado);
}

function PeliculaSeleccionada($param){
  $Peliculas = $this->model->MostrarPeliculaAdmin($param[0]);
  $NombreDeGenero = $this->model->GetNombreDeGeneroDePelicula($param[1]);
  $Generos = $this->model->GetGeneros();
  $this->view->MostrarPelicula($this->Titulo, $Peliculas, $Generos, $NombreDeGenero);

}

function MostrarEstrenos(){
  $PeliculasEstrenos = $this->model->BuscarEstrenos();
  $Generos = $this->model->GetGeneros();
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
