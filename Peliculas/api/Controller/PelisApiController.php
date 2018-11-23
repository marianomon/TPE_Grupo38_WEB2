<?php
require_once "Api.php";
require_once "./../model/PelisModel.php";

class PelisApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new PelisModel();
  }


function GetComentarios($param = null){
  if(isset($param)){
    $id = $param[0];
    $data = $this->model->GetComentarios($id);
  }else{
    $data=null;
}
  if(isset($data)){
    return $this->json_response($data, 200);
  }else{
    return $this->json_response(null, 404);
  }
}

function BorrarComentario($param = null){
  if(count($param) == 1){
    $id_comentario = $param[0];
    $r = $this->model->BorrarComentario($id_comentario);
    if($r == true){
      return $this->json_response($r, 200);
    }else{
      return $this->json_response("el elemento no existe", 300);
    }
  }else{
    return $this->json_response("No task specified", 300);
  }
}

function AgregarComentario($param = null){
  $datos = $this->getJSONData();
  $r = $this->model->AgregarComentariomodel($datos->cuerpo, $datos->nombre_user, $datos->id_pelicula, $datos->id_usuario, $datos->puntaje);
  return $this->json_response($r, 200);



  // $pelicula = $this->model->GetPeliculaPorNombre($datos->nombre);
  // var_dump($pelicula);
  // die;
  // if($datos->nombre == $pelicula){
  //
  //   return $this->json_response("ya existe", 300);
  // }else{
  //   return $this->json_response("todo piola", 200);
  // }
}

function EditarComentarios($param = null){
  if(count($param) == 1){
    $id_pelicula = $param[0];
    $datos = $this->getJSONData();
    $r = $this->model->ActualizarMovie($id_pelicula, $datos->id_genero, $datos->nombre, $datos->sinopsis, $datos->actores, $datos->iFrame, $datos->estreno);
    return $this->json_response($r, 200);
  }else{
    return $this->json_response("No task specified", 300);
  }
}


}




 ?>
