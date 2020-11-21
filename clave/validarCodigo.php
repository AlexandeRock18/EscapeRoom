<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Validación Formulario</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script>    
  function validarFormulario(){
    var txtUno = document.getElementById('Uno').value;
    var txtDos = document.getElementById('Dos').value;
    var txtTres = document.getElementById('Tres').value;

    
    //Texto campo obligatorio
    if(txtUno == null || txtUno != 'E' || txtUno.length == 0 ){
      $('#modalError').modal('show');
      return false;
    }

    if(txtDos == null || txtDos != '0' || txtDos.length == 0 ){
      $('#modalError').modal('show');
      return false;
    }

    if(txtTres == null || txtTres != '7' || txtTres.length == 0 ){
      $('#modalError').modal('show');
      return false;
    }


    return true;
  }
  </script>
</head>
<body>


  <style type="text/css">
    body {
      background: linear-gradient(to right,rgba(0, 0, 0, .8),rgba(0, 0, 0, .8)), 
      url(img/bg-muerte.jpg) center top fixed no-repeat;
              background-size: cover;
      font-family: arial;
    }
    label h3 {
      color: white;
    }
    .centrarIngresoClave {
      height: 100vh;
      display: flex;
    }
    .centrarBoton {
      margin: auto;
    }
    .form-control {
      text-align: center;
      font-size: 4em;
      font-weight: 900;
      background: transparent;
      color: #fff;
    }
    .centrarBoton.btn.btn-danger {
      font-size: 1.5em;
      text-transform: uppercase;
      font-weight: 600;
      background: #da0921;
    }
    label {
      width: 100%;
      text-align: center;
      /*text-transform: uppercase;*/
      font-weight: 600;
      font-size: 1.2em;
      color: #da0921;
    }
    h1 {
      color: red;
      text-transform: uppercase;
    }
    .regresar {
          top: 50px;
          position: fixed;
          margin: auto;
          left: 3%;
          z-index: 5000;
    }
    input {
      /*text-transform: uppercase;*/
    }
    </style>

  <section class="centrarIngresoClave">
    <?php
      $nombre = $_GET['nombre'];
    ?>

    <div class="container">

      <div class="regresar">
        <div class="text-center">
            <h1>
              <?php echo $nombre; ?>
            </h1>
            <form class="form-inline" role="form" action="../virus.php">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail2">Nombre</label>
                  <input hidden="" type="text" id="nombre" name="nombre" value='<?php echo $nombre; ?>'>
                </div>
                <button type="submit" class="btn btn-danger">
                  Puedes regresar a los juegos
                  <br>
                  presionando este botón
                </button>
              </form>
        </div>
      </div>


      <div class="row  h-100">
        

        <div class="col-xs-12 col-sm-12 col-md-12 align-self-center">

          <form action="../felicidades.php" onsubmit="return validarFormulario()">
            <label for="nombre">
              <h3 class="text-center">Digita la clave obtenida en cada juego para obtener el premio</h3>
              <hr>
            </label>
            <div class="row">
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <label>
                  Ahorcado
                </label>
                <input maxlength="1" class="form-control" id="Uno" name="Uno" type="text" autocomplete="off">
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <label>
                  Rompecabezas
                </label>
                <input maxlength="1" class="form-control" id="Dos" name="Dos" type="text" autocomplete="off">
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <label>
                  Parejas
                </label>
                <input maxlength="1" class="form-control" id="Tres" name="Tres" type="text" autocomplete="off">
              </div>
              <input hidden="" type="text" id="nombre" name="nombre" value='<?php echo $nombre; ?>'>
            </div>
            <br>
            <div class="text-center">
              <input class="centrarBoton btn btn-danger" type="submit" value="Enviar Código">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div class="modal" id="modalError">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">ERROR</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          Código no valido, vuelve a intentarlo.
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>


</body>
</html>