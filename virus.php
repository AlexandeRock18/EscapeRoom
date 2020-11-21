<!DOCTYPE html>
<html lang="es">
  <head>
    <title>VIRUS</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/89/three.min.js"></script>

    
    <style type="text/css">
        body {
            margin:0px;
            overflow-y:hidden;
            overflow-x:hidden;
            width: 100%;
        } 
        .contenedor {
        }
        object {
            display: table;
            width: 100%;
            position: relative;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background-color: transparent;
            z-index: 1;
        }
        .tituloReto {
            display: table;
            width: 100%;
            position: absolute;
            opacity: 1 !important;
            z-index: 50;
        }
        .tituloReto h1 {
            color: #fff;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            margin-top: 5%;
            font-size: 1.5em;
            text-align: center;
            text-transform: uppercase;
        }
        .tituloReto h1 strong {
            color: red;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-size: 1em;
            font-weight: 600;
            text-shadow: 2px 2px 15px rgb(0 0 0);
            
        }
        .row {
            color: #fff;
            text-align: center;
        }
.contenedorEnlace{
    padding:0;
    width:220px;
}
.urlEnlace{
    cursor:pointer;
    position:relative;
    background:rgba(0,0,0,1)
}
.urlEnlace img{
    width:100%;
    transform:scale(1,1);
    opacity:.3;
    transition:.3s
}
.bloqueDeTexto-Nombre{
    position:absolute;
    min-height:auto;
    bottom:0;
    color:white;
    width:100%;
    padding:10px;
    transition:.3s;
    letter-spacing:2px
}
.bloqueDeTexto-Nombre h3{
    text-shadow:2px 2px 5px rgba(0,0,0,1);
    color:#fff;
    text-align:center;
    display:table;
    margin:auto;
    font-weight:400;
    font-size:1.3em
}
.bloqueDeTexto{
    position:absolute;
    min-height:90px;
    bottom:0;
    color:white;
    width:100%;
    padding:10px;
    opacity:0;
    transition:.3s
}
.bloqueDeTexto p{
    font-size:1.5em;
    margin:5px 0;
    text-shadow:2px 2px 5px rgba(0,0,0,.8);
    color:#fff;
    text-align:center;
    margin-bottom:-20px
}
.bloqueDeTexto a{
    display:table;
    padding:5px 10px;
    background:#da0921;
    color:#fff!important;
    font-weight:600;
    text-decoration:none;
    margin:auto
}
.urlEnlace:hover .bloqueDeTexto{
    margin-bottom:30%;
    opacity:1;
    transition:.3s
}
.urlEnlace:hover img{
    transform:scale(1.5,1.5);
    opacity:.5;
    transition:.3s
}
.contenedorBtnServicios {
    position: relative;
    overflow: hidden;
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
      background: #7b0cd0;
    }
    label {
      width: 100%;
      text-align: center;
      /*text-transform: uppercase;*/
      font-weight: 600;
      font-size: 0.7em;
      color: #ff9900;
    }
    </style>

    <script type="text/javascript">
      frame.addWindowListener(new WindowAdapter() {
         public void windowClosing(WindowEvent e) {
           e.getWindow().setVisible(false);
               try {
                   wait();
               } catch (InterruptedException ex) {
                   Logger.getLogger(WindowsActions.class.getName()).log(Level.SEVERE, null, ex);
               }
         }
       });
    </script>
    <script type="text/javascript">
      window.history.forward();
      function sinVueltaAtras(){ window.history.forward(); }
    </script>

  </head>


  <body onload="sinVueltaAtras();" onpageshow="if (event.persisted) sinVueltaAtras();" onunload="">
    <?php
      $nombre = $_GET['nombre'];
    ?>
    <section class="contenedor">
        <div class="tituloReto">
            <h1>
                Felicidades 
                <strong><?php echo $nombre; ?>,</strong>
                Instaló <strong>pandora</strong>
                <br>
                El virus accederá a todos los datos almacenados en su equivuipo y 
                <br>
                solo ingresando el código correcto podrá detenerlo.
            </h1>

            
            <div class="container">
              <div class="text-center">
                <form class="form-inline text-center" role="form" action="clave/validarCodigo.php">
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Nombre</label>
                    <input hidden="" type="text" id="nombre" name="nombre" value='<?php echo $nombre; ?>'>
                  </div>
                  <button style="margin:auto;text-transform: uppercase;" type="submit" class="btn btn-danger">
                    Ingresa el código aquí
                  </button>
                </form>
              </div>
            </div>
            <br><br><br>
            <div class="container text-center">
                <div class="row" style="
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: flex-start;
">
                  <form class="form-inline text-center" role="form" action="Ahorcado/ahorcado.php">
                    <input hidden="" type="text" id="nombre" name="nombre" value='<?php echo $nombre; ?>'>
                    <!-- inicio boton -->
                    <button class="contenedorEnlace" type="submit">
                        <div class="urlEnlace">
                            <div class="contenedorBtnServicios">
                              <img src="img/ahorcado-btn.png">
                              <div class="bloqueDeTexto-Nombre">
                                <h3>
                                  AHORCADO   
                                </h3>
                              </div>
                              <div class="bloqueDeTexto">
                                <p class="hidden-xs">
                                  
                                </p>
                                <br>
                                <a>
                                  INICIE EL JUEGO
                                </a>
                              </div>
                            </div>
                          </div>
                      </button>
                      <!-- fin boton -->
                    </form>

                      <!-- inicio boton -->
                  <form class="form-inline text-center" role="form" action="JuegoMemoria/JuegoMemoriaDos.php">
                  <input hidden="" type="text" id="nombre" name="nombre" value='<?php echo $nombre; ?>'>
                  <!-- inicio boton -->
                  <button class="contenedorEnlace" type="submit">
                          <div class="urlEnlace">
                            <div class="contenedorBtnServicios">
                              <img src="JuegoMemoria/img/8.jpg">
                              <div class="bloqueDeTexto-Nombre">
                                <h3>
                                  PAREJAS   
                                </h3>
                              </div>
                              <div class="bloqueDeTexto">
                                <p class="hidden-xs">
                                  
                                </p>
                                <br>
                                <a>
                                  INICIE EL JUEGO
                                </a>
                              </div>
                            </div>
                          </div>
                      </button>
                    </form>
                      <!-- fin boton -->


                      <!-- inicio boton -->
                      <form class="form-inline text-center" role="form" action="juegoRompecabezaas/juegoRompecabezas.php">
                  <input hidden="" type="text" id="nombre" name="nombre" value='<?php echo $nombre; ?>'>
                  <!-- inicio boton -->
                  <button class="contenedorEnlace" type="submit">
                        <div class="urlEnlace">
                            <div class="contenedorBtnServicios">
                              <img src="juegoRompecabezaas/img/1.jpg">
                              <div class="bloqueDeTexto-Nombre">
                                <h3>
                                  ROMPECABEZAS  
                                </h3>
                              </div>
                              <div class="bloqueDeTexto">
                                <p class="hidden-xs">
                                  
                                </p>
                                <br>
                                <a>
                                  INICIE EL JUEGO
                                </a>
                              </div>
                            </div>
                          </div>
                      </button>
                    </form>
                      <!-- fin boton -->

                    </form>
                </div>
            </div>

            

        </div>

    </section>



    <script type="text/javascript">
    var tela, reder, eye, fx, fy;

    fx = window.innerWidth;
    fy = window.innerHeight;

    tela = new THREE.Scene();
    eye = new THREE.PerspectiveCamera(75, fx / fy, 0.1, 1000);
    reder = new THREE.WebGLRenderer();
    reder.setSize(fx, fy);
    document.body.appendChild(reder.domElement);

    //================================================================

    var modbola, matbola, bola;

    modbola = new THREE.SphereBufferGeometry(4, 6, 6);
    matbola = new THREE.MeshPhysicalMaterial({
      color: 0xff0000
    });
    bola = new THREE.Mesh(modbola, matbola);
    tela.add(bola);

    //================================================================

    var luz;

    luz = new THREE.PointLight(0x5b050d, 1, 100);
    luz.position.set(0, 0, 4);
    tela.add(luz);

    //================================================================

    eye.position.z = 5;

    var anim = function () {
      requestAnimationFrame(anim);

      bola.rotation.y += 0.01;
      bola.rotation.x += 0.01;
      bola.rotation.z += 0.01;

      reder.render(tela, eye);
    };

    anim();



    var gotas = new Array();
    setInterval(function () {
      var div = document.createElement("div");
      div.style.position = "fixed";
      document.body.appendChild(div);
      div.style.width = "150px";
      div.style.height = "80px";
      div.style.backgroundImage = "url(img/gota-fnl.png)";
      div.name = Math.floor(Math.random() * 3 + 3);
      div.style.top = "-30px";
      div.style.left = Math.floor(Math.random() * window.innerWidth - 6) + "px";
      gotas.push(div);
    }, 100);
    setInterval(function () {
      for (i in gotas) {
        gotas[i].style.top =
          Number(gotas[i].style.top.split("px")[0]) + Number(gotas[i].name) + "px";
        if (Number(gotas[i].style.top.split("px")[0]) > window.innerHeight) {
          document.body.removeChild(gotas[i]);
          gotas.splice(i, 1);
        }
      }
    }, 1);    
    </script>

  </body>
</html>
