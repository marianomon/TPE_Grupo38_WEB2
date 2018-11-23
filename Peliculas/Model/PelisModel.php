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

  function GetComentarios($id){
      $sentencia = $this->db->prepare("SELECT comentario.* , usuario.nombre_usuario from comentario inner join usuario on (comentario.id_usuario = usuario.id_usuario) where id_pelicula=?");
      $sentencia->execute(array($id));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetComentarioPorID($id){
      $sentencia = $this->db->prepare("select * from comentario where id_comentario=?");
      $sentencia->execute(array($id));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetPelicula($id){
    $sentencia = $this->db->prepare( "select * from pelicula where id_pelicula=?");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetPeliculaPorNombre($nombre){
    $sentencia = $this->db->prepare( "select * from pelicula where nombre=?");
    $sentencia->execute(array($nombre));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetPeliculasFiltradas($PARAMS  =  ''){
    $sentencia = $this->db->prepare( "select * from pelicula WHERE id_genero = ?");
    $sentencia->execute(array($PARAMS[0]));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function BorrarComentario($id_comentario){
    $comentario = $this->GetComentarioPorID($id_comentario);
    if(isset($comentario[0])){
      $sentencia = $this->db->prepare( "delete from comentario where id_comentario=?");
      $sentencia->execute(array($id_comentario));
      return (true);
    }else{
      return (false);
    }
  }

  function BorrarPelicula($id_pelicula){
    $sentencia = $this->db->prepare( "delete from pelicula where id_pelicula=?");
    $sentencia->execute(array($id_pelicula));
  }

  function AgregarPeliculamodel($genero,$nombre,$sinopsis,$actores,$estreno,$iFrame, $img){
    $pathImg = $this->SubirImg($img);
    $sentencia = $this->db->prepare( "insert into pelicula (id_genero, nombre, sinopsis, actores, iFrame, estreno, imagen) values (?,?,?,?,?,?,?)");
    $sentencia->execute(array($genero,$nombre,$sinopsis,$actores,$iFrame,$estreno, $pathImg));
  }

  function AgregarComentariomodel($cuerpo, $nombre_user, $id_pelicula, $id_usuario, $puntaje){
    $sentencia = $this->db->prepare( "INSERT INTO comentario( cuerpo, nombre_user, id_pelicula, id_usuario, puntaje) VALUES (?,?,?,?,?)");
    $sentencia->execute(array($cuerpo, $nombre_user, $id_pelicula, $id_usuario, $puntaje));
    return $this->GetComentarios("64");
}

  function MostrarPeliculaAdmin($id_pelicula){

    $sentencia = $this->db->prepare( "select * from pelicula where id_pelicula=?");
    $sentencia->execute(array($id_pelicula));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function ActualizarMovie($id_pelicula, $id_genero, $nombre, $sinopsis, $actores, $iFrame, $img){
    $pathImg = $this->SubirImg($img);
    $sentencia = $this->db->prepare("update pelicula set id_genero=?, nombre=?, sinopsis=?, actores=?, iFrame=?, imagen=? where id_pelicula=?");
    $sentencia->execute(array($id_genero, $nombre, $sinopsis, $actores, $iFrame, $pathImg, $id_pelicula));

  }

  function SubirImg($img){
    $ImagenFinal = 'imagenes/' . uniqid() . '.jpg';
        move_uploaded_file($img, $ImagenFinal);
        return $ImagenFinal;
  }

  function BuscarEstrenos(){
    $sentencia = $this->db->prepare( "select * from pelicula where estreno=1");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>
