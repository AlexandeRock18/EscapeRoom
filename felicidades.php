<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>¡Felicidades!</title>
    
    <link href="felicidades/css/bootstrap.css" rel="stylesheet" />
	  <link href="felicidades/css/coming-sssoon.css" rel="stylesheet" />    
    
    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    

    <script type="text/javascript">
      function validarFormulario(){
      var nombreUsuario = document.getElementById('nombre').value;      
      //Texto campo obligatorio
      if(nombreUsuario == null || nombreUsuario.length == 0 ){
        $('#modalError').modal('show');
        return false;
        }
        return true;
      }
    </script>
    <script type="text/javascript">
      window.history.forward();
      function sinVueltaAtras(){ window.history.forward(); }
    </script>
    <style type="text/css">
      * {
  margin: 0;
  padding: 0;
}

body {
  background-color: black;
}
      .main .logo {
        margin-top: 50px;
      }
      .main .motto {
        min-height: 100px;
      }
      button.close {
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 50px;
      }
      .main .motto, .main .subscribe .info-text {
        margin-top: 10px;
      }
      .cover.black {
        background-color: rgba(0,0,0,.7);
      }
    </style>
</head>


<body onload="sinVueltaAtras();" onpageshow="if (event.persisted) sinVueltaAtras();" onunload="">

<?php
  $nombre = $_GET['nombre'];
?>

<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        
            <li>
                <a href="https://www.facebook.com/" target="_blank"> 
                    <i class="fa fa-facebook-square"></i>
                    Facebook
                </a>
            </li>
             <li>
                <a href="https://twitter.com/?lang=es" target="_blank"> 
                    <i class="fa fa-twitter"></i>
                    Tweet
                </a>
            </li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<div class="main">

<!--    Change the image source '/felicidades/images/restaurant.jpg')" with your favourite image.     -->
    
    <div class="cover black" data-color="black"></div>
     
<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->
  


  

          


    <div class="container">
        <h1 class="logo cursive">
            ¡Felicidades!
        </h1>
        <br>
        <h4 class="motto" style="text-transform: uppercase;z-index: 5000; position: relative;font-size: 5em">
          <strong><i class="fa fa-heart heart" style="color:red;"></i> <?php echo $nombre; ?></strong>
        </h3>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
        
        <br><br>

        <div class="content">
          

            <h4 class="motto">
              Lograste desactivar el virus y acabaste con la monotonia
              <br>
        </div>
    </div>
    <div class="footer">
      <div class="container">
             Hecho con <i class="fa fa-heart heart"></i> por <a href="#">Alexander González</a>.
      </div>
    </div>


    <div class="modal" id="modalError">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1 class="modal-title logo cursive" style="
    color: #FF3B30;
    text-shadow: none;
    margin-top: 20px;
    font-size: 3em;
">Ingresa tu nombre</h1>
          
        </div>
        <!-- Modal body -->
        <div class="modal-body text-center">
          No dejes pasar esta gran oportunidad
          <br>
          Ingresa tu nombre y participa
          <br>
          No te arrepentiras
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>

 </div>


<script type="text/javascript">
var rnd = Math.random,
  flr = Math.floor;

let canvas = document.createElement("canvas");
document.getElementsByTagName("body")[0].appendChild(canvas);
canvas.style.position = "absolute";
canvas.style.width = "100%";
canvas.style.height = "100%";

canvas.width = canvas.clientWidth;
canvas.height = canvas.clientHeight;

let ctx = canvas.getContext("2d");

function rndNum(num) {
  return rnd() * num + 1;
}

function vector(x, y) {
  this.x = x;
  this.y = y;

  this.add = function (vec2) {
    this.x = this.x + vec2.x;
    this.y = this.y + vec2.y;
  };
}

function particle(pos, vel) {
  this.pos = new vector(pos.x, pos.y);
  this.vel = vel;
  this.dead = false;
  this.start = 0;

  this.update = function (time) {
    let timeSpan = time - this.start;

    if (timeSpan > 500) {
      this.dead = true;
    }

    if (!this.dead) {
      this.pos.add(this.vel);
      this.vel.y = this.vel.y + gravity;
    }
  };

  this.draw = function () {
    if (!this.dead) {
      drawDot(this.pos.x, this.pos.y, 1);
    }
  };
}

function firework(x, y) {
  this.pos = new vector(x, y);
  this.vel = new vector(0, -rndNum(10) - 3);
  this.color = "hsl(" + rndNum(360) + ", 100%, 50%)";
  this.size = 4;
  this.dead = false;
  this.start = 0;
  let exParticles = [],
    exPLen = 100;

  let rootShow = true;

  this.update = function (time) {
    if (this.dead) {
      return;
    }

    rootShow = this.vel.y < 0;

    if (rootShow) {
      this.pos.add(this.vel);
      this.vel.y = this.vel.y + gravity;
    } else {
      if (exParticles.length === 0) {
        flash = true;
        for (let i = 0; i < exPLen; i++) {
          exParticles.push(
            new particle(this.pos, new vector(-rndNum(10) + 5, -rndNum(10) + 5))
          );
          exParticles[exParticles.length - 1].start = time;
        }
      }
      let numOfDead = 0;
      for (let i = 0; i < exPLen; i++) {
        let p = exParticles[i];
        p.update(time);
        if (p.dead) {
          numOfDead++;
        }
      }

      if (numOfDead === exPLen) {
        this.dead = true;
      }
    }
  };

  this.draw = function () {
    if (this.dead) {
      return;
    }

    ctx.fillStyle = this.color;
    if (rootShow) {
      drawDot(this.pos.x, this.pos.y, this.size);
    } else {
      for (let i = 0; i < exPLen; i++) {
        let p = exParticles[i];
        p.draw();
      }
    }
  };
}

function drawDot(x, y, size) {
  ctx.beginPath();

  ctx.arc(x, y, size, 0, Math.PI * 2);
  ctx.fill();

  ctx.closePath();
}

var fireworks = [],
  gravity = 0.2,
  snapTime = 0,
  flash = false;

function init() {
  let numOfFireworks = 20;
  for (let i = 0; i < numOfFireworks; i++) {
    fireworks.push(new firework(rndNum(canvas.width), canvas.height));
  }
}

function update(time) {
  for (let i = 0, len = fireworks.length; i < len; i++) {
    let p = fireworks[i];
    p.update(time);
  }
}

function draw(time) {
  update(time);

  ctx.fillStyle = "rgba(0,0,0,0.3)";
  if (flash) {
    flash = false;
  }
  ctx.fillRect(0, 0, canvas.width, canvas.height);

  ctx.fillStyle = "white";
  ctx.font = "30px Arial";
  let newTime = time - snapTime;
  snapTime = time;

  //ctx.fillText(newTime,10,50);

  ctx.fillStyle = "blue";
  for (let i = 0, len = fireworks.length; i < len; i++) {
    let p = fireworks[i];
    if (p.dead) {
      fireworks[i] = new firework(rndNum(canvas.width), canvas.height);
      p = fireworks[i];
      p.start = time;
    }
    p.draw();
  }

  window.requestAnimationFrame(draw);
}

window.addEventListener("resize", function () {
  canvas.width = canvas.clientWidth;
  canvas.height = canvas.clientHeight;
});

init();
draw();
 
</script>

 

</body>
    <script src="felicidades/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="felicidades/js/bootstrap.min.js" type="text/javascript"></script>
	
</html>