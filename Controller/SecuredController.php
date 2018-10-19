<?php

class SecuredController
{

  function __construct(){

    session_start();
    if(isset($_SESSION["usuario"])){

    }else{
      header(LOGIN);
    }
  }

}





 ?>
