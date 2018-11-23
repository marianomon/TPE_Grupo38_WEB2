<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('HOMEADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/peliculas');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/LogIn');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/LogOut');

class ConfigApi
{

    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentarios#GET'=> 'PelisApiController#GetComentarios',
      'comentarios#DELETE'=> 'PelisApiController#BorrarComentario',
      'comentarios#POST'=> 'PelisApiController#AgregarComentario',
      'comentarios#PUT'=> 'PelisApiController#EditarComentarios',
    ];
}

 ?>
