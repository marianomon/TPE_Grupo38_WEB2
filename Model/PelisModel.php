<?php


class PelisModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_generos;charset=utf8'
    , 'root', '');
  }

  function GetPeliculas(){
    $sentencia = $this->db->prepare( "select * from pelicula");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetPeliculasFiltradas($PARAMS  =  ''){
    $sentencia = $this->db->prepare( "select * from pelicula WHERE id_genero = ?");
    $sentencia->execute(array($PARAMS[0]));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function BorrarPelicula($id_pelicula){
    $sentencia = $this->db->prepare( "delete from pelicula where id_pelicula=?");
    $sentencia->execute(array($id_pelicula));
    header(HOMEADMIN);
  }

  function AgregarPeliculamodel($genero,$nombre,$sinopsis,$actores,$estreno,$iFrame){
    $sentencia = $this->db->prepare( "insert into pelicula (id_genero, nombre, sinopsis, actores, iFrame, estreno) values (?,?,?,?,?,?)");
    $sentencia->execute(array($genero,$nombre,$sinopsis,$actores,$iFrame,$estreno));
    header(HOMEADMIN);
  }

  function MostrarPeliculaAdmin($id_pelicula){

    $sentencia = $this->db->prepare( "select * from pelicula where id_pelicula=?");
    $sentencia->execute(array($id_pelicula));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function ActualizarMovie($id_pelicula, $id_genero, $nombre, $sinopsis, $actores, $iFrame){

    $sentencia = $this->db->prepare("update pelicula set id_genero=?, nombre=?, sinopsis=?, actores=?, iFrame=? where id_pelicula=?");
    $sentencia->execute(array($id_genero, $nombre, $sinopsis, $actores, $iFrame, $id_pelicula));
    header(HOME . "/PeliculaSeleccionadaAdmin/$id_pelicula/$id_genero");
  }


  function BuscarEstrenos(){
    $sentencia = $this->db->prepare( "select * from pelicula where estreno=1");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>
