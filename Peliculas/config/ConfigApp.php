<?php


define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('HOMEADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/admin');
define('HOMELOGUEADO', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logueado');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/LogIn');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/LogOut');


class ConfigApp
{

    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'PelisController#Home',
      'home'=> 'PelisController#Home',

      'Registro'=>'LoginController#Registrarse',
      'verificarRegistro'=>'LoginController#Registro',
      'LogIn'=> 'LoginController#login',
      'verificarLogin'=>'LoginController#verificarLogin',
      'LogOut'=>'AdminController#Logout',

      'generoAdmin'=>'AdminController#GenerarGeneroAdmin',
      'admin'=>'AdminController#PelisAdmin',





      'logueado'=>'LogueadoController#Home',
      'PeliculaSeleccionada_logueado'=>'LogueadoController#PeliculaSeleccionada_logueado',
      'genero_logueado'=>'LogueadoController#GenerarGenero_logueado',
      'estrenos_logueado'=>'LogueadoController#MostrarEstrenos_logueado',



      'ActualizarPelicula'=>'AdminController#ActualizarPelicula',

      'FormularioAgregarPelicula'=>'AdminController#FormularioAgregarPelicula',
      'AgregarPelicula'=>'AdminController#AgregarPelicula',

      'borrar'=> 'AdminController#BorrarPelicula',

      'PeliculaSeleccionada'=>'PelisController#PeliculaSeleccionada',
      'PeliculaSeleccionadaAdmin'=>'AdminController#MostrarPeliculaAdmin',

      'estrenos'=>'PelisController#MostrarEstrenos',
      'estrenosadmin'=>'AdminController#MostrarEstrenosAdmin',

      'genero'=> 'PelisController#GenerarGenero',
      'borrarGenero'=>'AdminController#borrarGenero',

      'FormularioAgregarGenero'=> 'AdminController#FormularioAgregarGenero',
      'AgregarGenero'=> 'AdminController#AgregarGenero',
      'FormularioEditarGenero'=> 'AdminController#FormularioEditarGenero',
      'EditarGenero'=> 'AdminController#EditarGenero',
    ];
}

 ?>
