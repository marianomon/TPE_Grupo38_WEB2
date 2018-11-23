<?php

require_once "View/LoginView.php";
require_once "Model/LoginModel.php";




class LoginController
{

  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new LoginModel();
    $this->Titulo = "Login";
  }
    function Registrarse(){
        $Generos = $this->model->GetGeneros();
        $this->view->FormRegistro($this->Titulo, $Generos);
    }

    function login(){
      $Generos = $this->model->GetGeneros();
      $this->view->mostrarLogin($this->Titulo, $Generos);
    }

    function verificarLogin(){
      $usuario = $_POST["usuario"];
      $pass = $_POST["contraseña"];
      $db_usuario = $this->model->getUser($usuario);
      // GENERAR CONTRASEÑA  var_dump(password_hash("contraseña", PASSWORD_DEFAULT));
      //User: mariano    Pass:contraseña
      if (isset($db_usuario)) {
        if (password_verify($pass, $db_usuario[0]["pass"])){
          if ($db_usuario[0]["admin"] == 1){
          session_start();
          $_SESSION["usuario"] = "$usuario";
          header(HOMEADMIN);
        }else{
          session_start();
          $_SESSION["usuario"] = "$usuario";
          header(HOMELOGUEADO);
        }
        }else {
          $Generos = $this->model->GetGeneros();
          $this->view->mostrarLogin($this->Titulo, $Generos, "contraseña incorrecta");
        }
      }else {
        echo "no hay usuario";
      }

    }

    Function Registro(){
      $usuario = $_POST["Nombre-User"];
      $pass = $_POST["Contraseña"];
      $REpass = $_POST["Contraseña-Reescrita"];
      $db_usuario = $this->model->getUser($usuario);
      if ($db_usuario == true){
        $Generos = $this->model->GetGeneros();
        $this->view->FormRegistro ($this->Titulo, $Generos, "Ya existe ese usuario, por favor ingresa otro");
      }else{
        if($pass == $REpass){
          $pass_cod = password_hash("$pass", PASSWORD_DEFAULT);
          $this->model->EnviarDatosRegistro($usuario, $pass_cod);
          $db_usuario = $this->model->getUser($usuario);
          if (password_verify($pass, $db_usuario[0]["pass"])){
            if ($db_usuario[0]["admin"] == 1){
            session_start();
            $_SESSION["usuario"] = "$usuario";
            header(HOMEADMIN);
          }else{
            header(HOMELOGUEADO);
          }
        }else{
          var_dump("problema...");
        }
        }else{
          $Generos = $this->model->GetGeneros();
          $MalaContra = "Contraseña no coincide";
          $this->view->FormRegistro ($this->Titulo, $Generos, "", $MalaContra);
        }
      }
    }
  }

 ?>
