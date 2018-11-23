{include file="header.tpl"}

<div class="container-fluid FondoGrisOscuro LetrasBlancas">
  <div class="row justify-content-md-center">
    <div class="col-5 FormLog">

        <form method="post" action="verificarLogin">
          <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="input" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Entrar Usuario">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Password">
            {$Mensaje_Error}
          </div>
          <button type="submit" class="btn btn-primary">LogIn</button>
          <button id="Boton-Registrarse" class="btn btn-primary" type="button" name="button">Registrarse</button>
        </form>
      </div>
    </div>

  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/SecondaryJS.js" type="text/javascript"></script>
  </body>
</html>
