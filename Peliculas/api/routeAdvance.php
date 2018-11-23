<?php

define('RESOURCE', 0);
define('PARAMS', 1);

require_once "config/ConfigApi.php";
require_once "Controller/PelisApiController.php";

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApi::$RESOURCE] = $urlExploded[0]. '#'. $_SERVER['REQUEST_METHOD'];
  $arrayReturn[ConfigApi::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['resource'])){
  $urlData = parseURL($_GET['resource']);
  $resource = $urlData[ConfigApi::$RESOURCE]; //Home
  if(array_key_exists($resource,ConfigApi::$RESOURCES)){
    $params = $urlData[ConfigApi::$PARAMS];
    $resource = explode('#',ConfigApi::$RESOURCES[$resource]);
    $controller = new $resource[0]();
    $metodo = $resource[1];
    if(isset($params[0]) && $params[0] != null){
        echo $controller->$metodo($params);
    }else{
      echo $controller->$metodo();
    }
  }
}

 ?>
