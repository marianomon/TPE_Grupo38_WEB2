{include file="header.tpl"}


<div class="container-fluid FondoGrisOscuro LetrasBlancas">
  <div class="row justify-content-md-center">
    <div class="col-5 FormLog">

    <form method="post" action="verificarRegistro">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre de Usuario</label>
        <input type="input" class="form-control" name="Nombre-User" id="exampleInputEmail1" placeholder="Escriba nombre de usuario">
        {$Mensaje_Error}
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" name="Contraseña" id="exampleInputPassword1" placeholder="Contraseña">
        {$Mensaje_Error_Contra}
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Reescriba la Contraseña</label>
        <input type="password" class="form-control" name="Contraseña-Reescrita" id="exampleInputPassword2" placeholder="Reescriba Contraseña">
      </div>
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
  </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
