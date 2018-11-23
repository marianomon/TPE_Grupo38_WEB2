<?php

class LoginModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_generos;charset=utf8'
    , 'root', '');
  }

  function GetGeneros(){
    $sentencia = $this->db->prepare( "select * from genero");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getUser($usuario){
    $sentencia = $this->db->prepare( "select * from usuario where nombre_usuario = ?");
    $sentencia->execute(array($usuario));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function EnviarDatosRegistro($usuario, $pass){
    $sentencia = $this->db->prepare("insert into usuario (nombre_usuario, pass) values (?,?)");
    $sentencia->execute(array($usuario, $pass));  
  }
}

 ?>
