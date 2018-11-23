<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <base href="{$root}/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{$root}/logueado">MisPelis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href={$root}/logueado>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{$root}/estrenos_logueado">Estrenos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Género
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          {foreach from=$Generos item=genero}
            <a class="dropdown-item" href="{$root}/genero_logueado/{$genero['id_genero']}"> {$genero['nombre']}</a>
            <div class="dropdown-divider"></div>

          {/foreach}
        </div>
      </li>
    </ul>
      <a type="button" href={$root}/LogOut class="btn btn-primary my-2 nav-link">LogOut</a>
  </div>
</nav>
