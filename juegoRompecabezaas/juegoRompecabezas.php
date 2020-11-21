<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Escape Room - Rompecabezas</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <style>
        /*Código armado por La Foca Loca S.A. No modificar*/
        body {
          font-family: Arial, sans-serif;
          width: 940px;
          margin: 5% auto;
          min-height: 100%;
          background: linear-gradient(to right,rgba(0, 0, 0, .8),rgba(0, 0, 0, 0.8)), url(img/bg-muerte.jpg) center top fixed no-repeat;
          background-size: cover;
        }
        ul {
          padding-left: 0;
          list-style: none;
        }
        li {
          padding: 5px 0;
        }
        li::before {
          content: "• ";
          color: #0c3d63;
        }

        .col-40, .col-60 {
          display: table-cell;
          margin: 0;
          vertical-align: top;
        }
        .col-40 {
          background: #FFF;
          padding: 30px;
          color: #000;
        }

        #juego div {
          text-align: center;
          animation: fadein 2s;
        }
        #juego {
          width: 600px;
          height: 600px;
          background-color: rgb(37 37 37);
        }

        @keyframes fadein {
          from { opacity: 0; }
          to   { opacity: 1; }
        }

        .piezas {
          width: 198px;
          height: 198px;
          float: left;
          border: solid 1px rgb(39 40 41);
        }
        #titulo {
          font-size: 100%;
    letter-spacing: 5px;
    padding-left: 10px;
    padding-right: 10px;
        }
        #ins_titulo {
          color:    #0c3d63;
          letter-spacing: 1px;
          font-size: 90%;
        }
        #ins_items {
          font-weight: bold;
        }
        footer {
          display: table;
    /* background-color: #0c3d63; */
    font-size: 80%;
    margin: 0px 0px 0px 0px;
    width: 100%;
    text-align: center;
    color: #fff;
        }
        h1 {
      color: red;
      text-transform: uppercase;
    }
    .regresar {
          bottom: 50px;
          position: fixed;
          margin: auto;
          left: 3%;
          z-index: 5000;
      }
    </style>


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



    <div class="col-40">
      <div id="titulo">
        <h1>Rompecabezas</h1>
      </div>

      <div id="ins_titulo">
        <h1>Instrucciones</h1>
      </div>
      <div id="ins_items">
        <ul>
          <li>
            Mueve las piezas presionando las teclas de flechas
          </li>
          <li>
            Debes encontrar el orden correcto de las piezas
          </li>
        </ul>
      </div>
    </div>

    <div class="col-60">
      <div id="juego">
        <div>
          <img src="img/1.jpg" id=1 class="piezas"></img>
          <img src="img/2.jpg" id=2 class="piezas"></img>
          <img src="img/3.jpg" id=3 class="piezas"></img>
          <img src="img/4.jpg" id=4 class="piezas"></img>
          <img src="img/5.jpg" id=5 class="piezas"></img>
          <img src="img/6.jpg" id=6 class="piezas"></img>
          <img src="img/7.jpg" id=7 class="piezas"></img>
          <img src="img/8.jpg" id=8 class="piezas"></img>
          <div  id=9 class="piezas"></div>
        </div>
      </div>
    </div>
    <footer>
      <p>Puedes obtener una pista al completar el rompecabezas</p>
    </footer>
    <script src="js/juego.js"></script>


    <script type="text/javascript">
    // Representación de la grilla. Cada nro representa a una pieza.
// El 9 es la posición vacía
var grilla = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9]
];

// Ac&aacute; vamos a ir guardando la posición vacía
var posicionVacia = {
  fila: 2,
  columna: 2
};

// Esta función va a chequear si el Rompecabezas est&aacute; en la posición ganadora
function chequearSiGano() {
  var gano = true;
  for (i = 0; i < 9; i++) {
    var x = Math.floor(i / 3);
    var y = i % 3;
    if (i + 1 !== grilla[x][y]) {
      gano = false;
      break;
    }
  }
  return gano;
}

// la hacen los alumnos, pueden mostrar el cartel como prefieran. Pero es importante que usen
// esta función
function mostrarCartelGanador() {
  if (chequearSiGano() == true) {
    alert("El codigo es 0");
  }
}

// Intercambia posiciones grilla y en el DOM
function intercambiarPosiciones(fila1, columna1, fila2, columna2) {
  var temp = grilla[fila1][columna1];
  grilla[fila1][columna1] = grilla[fila2][columna2];
  grilla[fila2][columna2] = temp;
  var num1 = grilla[fila1][columna1];
  var num2 = grilla[fila2][columna2];
  var str1 = num1.toString();
  var str2 = num2.toString();
  var pieza1 = document.getElementById(str1);
  var pieza2 = document.getElementById(str2);
  var clonpieza1 = pieza1.cloneNode(true);
  var clonpieza2 = pieza2.cloneNode(true);
  pieza2.parentNode.replaceChild(clonpieza1, pieza2);
  pieza1.parentNode.replaceChild(clonpieza2, pieza1);
}

// Actualiza la posición de la pieza vacía
function actualizarPosicionVacia(nuevaFila, nuevaColumna) {
  posicionVacia.fila = nuevaFila;
  posicionVacia.columna = nuevaColumna;
}

// Para chequear si la posicón está dentro de la grilla.
function posicionValida(fila, columna) {
  if (fila < 3 && columna < 3) {
    if (fila > -1 && columna > -1) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}

// Movimiento de fichas, en este caso la que se mueve es la blanca intercambiando
// su posición con otro elemento
function moverEnDireccion(direccion) {
  var nuevaFilaPiezaVacia;
  var nuevaColumnaPiezaVacia;

  // Intercambia pieza blanca con la pieza que está arriba suyo
  if (direccion == 40) {
    nuevaFilaPiezaVacia = posicionVacia.fila - 1;
    nuevaColumnaPiezaVacia = posicionVacia.columna;
  }
  // Intercambia pieza blanca con la pieza que está abajo suyo
  else if (direccion == 38) {
    nuevaFilaPiezaVacia = posicionVacia.fila + 1;
    nuevaColumnaPiezaVacia = posicionVacia.columna;
  }
  // Intercambia pieza blanca con la pieza que está a su izq
  else if (direccion == 39) {
    // Completar
    nuevaFilaPiezaVacia = posicionVacia.fila;
    nuevaColumnaPiezaVacia = posicionVacia.columna - 1;
  }
  // Intercambia pieza blanca con la pieza que está a su der
  else if (direccion == 37) {
    // Completar
    nuevaFilaPiezaVacia = posicionVacia.fila;
    nuevaColumnaPiezaVacia = posicionVacia.columna + 1;
  }

  // Se chequea si la nueva posición es válida, si lo es, se intercambia
  if (posicionValida(nuevaFilaPiezaVacia, nuevaColumnaPiezaVacia)) {
    intercambiarPosiciones(
      posicionVacia.fila,
      posicionVacia.columna,
      nuevaFilaPiezaVacia,
      nuevaColumnaPiezaVacia
    );
    actualizarPosicionVacia(nuevaFilaPiezaVacia, nuevaColumnaPiezaVacia);
  }
}

// Extras, ya vienen dadas

function mezclarPiezas(veces) {
  if (veces <= 0) {
    return;
  }
  var direcciones = [40, 38, 39, 37];
  var direccion = direcciones[Math.floor(Math.random() * direcciones.length)];
  moverEnDireccion(direccion);

  setTimeout(function () {
    mezclarPiezas(veces - 1);
  }, 100);
}

function capturarTeclas() {
  document.body.onkeydown = function (evento) {
    moverEnDireccion(evento.which);

    var gano = chequearSiGano();
    if (gano) {
      setTimeout(function () {
        mostrarCartelGanador();
      }, 1000);
    }
    evento.preventDefault();
  };
}

function iniciar() {
  mezclarPiezas(60);
  capturarTeclas();
}

iniciar();
    </script>
  </body>
</html>
