 <!DOCTYPE html>
<html lang="es">
  <head>
    <title>Escape Room - Ahorcado</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
  	<style type="text/css">
  		/* Variabes */
		/* Mixin's */
		body {
		  background: linear-gradient(to right,rgba(0, 0, 0, .8),rgba(0, 0, 0, 0.8)), url(https://media.canalnet.tv/2019/03/muerte-33-974x550.jpg) center top fixed no-repeat;
          background-size: cover;
		  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		  color: #fff;
		  height: 100%;
		  text-align: center;
		  font-size: 18px;
		}

		.wrappper {
		  width: 100%;
		  margin: 0 auto;
		}
		.wrappper:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		canvas {
		  color: #fff;
		  border: #fff dashed 2px;
		  padding: 15px;
		}

		h1,
		h2,
		h3 {
		  font-family: "Roboto", sans-serif;
		  font-weight: 100;
		  text-transform: uppercase;
		  margin: 5px 0;
		}

		h1 {
			font-size: 1.5em;
		    color: #F44336;
		    font-weight: 600;
		    margin-top: 35px;
		}

		h2 {
		  font-size: 1.6em;
		}

		p {
		  font-size: 1em;
		}

		#alphabet {
		  margin: 15px auto;
		  padding: 0;
		  max-width: 900px;
		}
		#alphabet:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		#alphabet li {
			display: table;
			float: left;
			margin: 0 10px 10px 0;
			list-style: none;
			width: 35px;
			height: 30px;
			padding-top: 5px;
			padding-bottom: 5px;
			background: #fff;
			color: #000;
			cursor: pointer;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			-khtml-border-radius: 5px;
			border: solid 1px #fff;
		}
		#alphabet li:hover {
		  background: #F44336;
		  border: solid 1px #fff;
		  color: #fff;
		}

		#my-word {
		  margin: 0;
		  display: block;
		  padding: 0;
		  display: block;
		}

		#my-word li {
		  position: relative;
		  list-style: none;
		  margin: 0;
		  display: inline-block;
		  padding: 0 10px;
		  font-size: 1.6em;
		}

		.active {
		  opacity: 0.4;
		  filter: alpha(opacity=40);
		  -moz-transition: all 1s ease-in;
		  -moz-transition: all 0.3s ease-in-out;
		  -webkit-transition: all 0.3s ease-in-out;
		  cursor: default;
		}
		.active:hover {
		  -moz-transition: all 1s ease-in;
		  -moz-transition: all 0.3s ease-in-out;
		  -webkit-transition: all 0.3s ease-in-out;
		  opacity: 0.4;
		  filter: alpha(opacity=40);
		  -moz-transition: all 1s ease-in;
		  -moz-transition: all 0.3s ease-in-out;
		  -webkit-transition: all 0.3s ease-in-out;
		}

		#mylives {
		  font-size: 1.6em;
		  text-align: center;
		  display: block;
		  color: #F44336;
		}

		button {
		  -moz-border-radius: 5px;
		  -webkit-border-radius: 5px;
		  border-radius: 5px;
		  -khtml-border-radius: 5px;
		  background: #F44336;
		  color: #fff;
		  border: solid 1px #fff;
		  text-decoration: none;
		  cursor: pointer;
		  font-size: 1.2em;
		  padding: 18px 10px;
		  width: 180px;
		  margin: 10px;
		  outline: none;
		}
		button:hover {
		  -webkit-transition: all 0.3s ease-in-out;
		  -moz-transition: all 0.3s ease-in-out;
		  transition: all 0.3s ease-in-out;
		  background: #fff;
		  border: solid 1px #fff;
		  color: #F44336;
		}

		@media (max-width: 767px) {
		  #alphabet {
		    padding: 0 0 0 15px;
		  }
		}
		@media (max-width: 480px) {
		  #alphabet {
		    padding: 0 0 0 25px;
		  }
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
                <button style="display: table; width: 100%;" type="submit" class="btn btn-danger">
                  Puedes regresar a los juegos
                  <br>
                  presionando este botón
                </button>
              </form>
        </div>
      </div>


  	<div class="wrapper">
  		<div class="container">
	  <h1>¿Quieres salvar tu información?
	  	<br>
	  si deseas obtener parte del código</h1>	  
	  <p>Usa el alfabeto de abajo para adivinar la palabra o haz clic en ayuda para obtener una pista. </p>
	  <hr>
	  <h2>que empiece el juego</h2>
	</div>
	</div>
	<div class="wrapper">
	  <div id="buttons">
	  </div>
	  <p id="catagoryName"></p>
	  <div id="hold">
	  </div>
	  <p id="mylives"></p>
	  <p id="clue"> Pista -</p>
	  <canvas id="stickman"></canvas>
	  <div class="container">
	    <button id="hint">Ayuda</button>
	    <button id="reset">Juega de nuevo</button>
	  </div>
	</div>





  	<script>
  		window.onload = function () {
		  var alphabet = [
		    "a",
		    "b",
		    "c",
		    "d",
		    "e",
		    "f",
		    "g",
		    "h",
		    "i",
		    "j",
		    "k",
		    "l",
		    "m",
		    "n",
		    "o",
		    "p",
		    "q",
		    "r",
		    "s",
		    "t",
		    "u",
		    "v",
		    "w",
		    "x",
		    "y",
		    "z"
		  ];

		  var categories; // Array of topics
		  var chosenCategory; // Selected catagory
		  var getHint; // Word getHint
		  var word; // Selected word
		  var guess; // Geuss
		  var geusses = []; // Stored geusses
		  var lives; // Lives
		  var counter; // Count correct geusses
		  var space; // Number of spaces in word '-'

		  // Get elements
		  var showLives = document.getElementById("mylives");
		  var showCatagory = document.getElementById("scatagory");
		  var getHint = document.getElementById("hint");
		  var showClue = document.getElementById("clue");

		  // create alphabet ul
		  var buttons = function () {
		    myButtons = document.getElementById("buttons");
		    letters = document.createElement("ul");

		    for (var i = 0; i < alphabet.length; i++) {
		      letters.id = "alphabet";
		      list = document.createElement("li");
		      list.id = "letter";
		      list.innerHTML = alphabet[i];
		      check();
		      myButtons.appendChild(letters);
		      letters.appendChild(list);
		    }
		  };

		  // Select Catagory
		  var selectCat = function () {
		    if (chosenCategory === categories[2]) {
		      catagoryName.innerHTML = "La categoría elegida son las ciudades";
		    } else if (chosenCategory === categories[1]) {
		      catagoryName.innerHTML = "La categoría elegida es deportes";
		    } else if (chosenCategory === categories[0]) {
		      catagoryName.innerHTML = "La categoría elegida son marcas deportivas";
		    }
		  };

		  // Create geusses ul
		  result = function () {
		    wordHolder = document.getElementById("hold");
		    correct = document.createElement("ul");

		    for (var i = 0; i < word.length; i++) {
		      correct.setAttribute("id", "my-word");
		      guess = document.createElement("li");
		      guess.setAttribute("class", "guess");
		      if (word[i] === "-") {
		        guess.innerHTML = "-";
		        space = 1;
		      } else {
		        guess.innerHTML = "_";
		      }

		      geusses.push(guess);
		      wordHolder.appendChild(correct);
		      correct.appendChild(guess);
		    }
		  };

		  // Show lives
		  comments = function () {
		    showLives.innerHTML = "Tienes " + lives + " Vidas";
		    if (lives < 1) {
		      showLives.innerHTML = "Se agotarón los intentos";
		    }
		    for (var i = 0; i < geusses.length; i++) {
		      if (counter + space === geusses.length) {
		        showLives.innerHTML = "Felicidades el código es la letra inicial en mayuscula de la capital de Suecia";
		      }
		    }
		  };

		  // Animate man
		  var animate = function () {
		    var drawMe = lives;
		    drawArray[drawMe]();
		  };

		  // Hangman
		  canvas = function () {
		    myStickman = document.getElementById("stickman");
		    context = myStickman.getContext("2d");
		    context.beginPath();
		    context.strokeStyle = "#fff";
		    context.lineWidth = 2;
		  };

		  head = function () {
		    myStickman = document.getElementById("stickman");
		    context = myStickman.getContext("2d");
		    context.beginPath();
		    context.arc(60, 25, 10, 0, Math.PI * 2, true);
		    context.stroke();
		  };

		  draw = function ($pathFromx, $pathFromy, $pathTox, $pathToy) {
		    context.moveTo($pathFromx, $pathFromy);
		    context.lineTo($pathTox, $pathToy);
		    context.stroke();
		  };

		  frame1 = function () {
		    draw(0, 150, 150, 150);
		  };

		  frame2 = function () {
		    draw(10, 0, 10, 600);
		  };

		  frame3 = function () {
		    draw(0, 5, 70, 5);
		  };

		  frame4 = function () {
		    draw(60, 5, 60, 15);
		  };

		  torso = function () {
		    draw(60, 36, 60, 70);
		  };

		  rightArm = function () {
		    draw(60, 46, 100, 50);
		  };

		  leftArm = function () {
		    draw(60, 46, 20, 50);
		  };

		  rightLeg = function () {
		    draw(60, 70, 100, 100);
		  };

		  leftLeg = function () {
		    draw(60, 70, 20, 100);
		  };

		  drawArray = [
		    rightLeg,
		    leftLeg,
		    rightArm,
		    leftArm,
		    torso,
		    head,
		    frame4,
		    frame3,
		    frame2,
		    frame1
		  ];

		  // OnClick Function
		  check = function () {
		    list.onclick = function () {
		      var geuss = this.innerHTML;
		      this.setAttribute("class", "active");
		      this.onclick = null;
		      for (var i = 0; i < word.length; i++) {
		        if (word[i] === geuss) {
		          geusses[i].innerHTML = geuss;
		          counter += 1;
		        }
		      }
		      var j = word.indexOf(geuss);
		      if (j === -1) {
		        lives -= 1;
		        comments();
		        animate();
		      } else {
		        comments();
		      }
		    };
		  };

		  // Play
		  play = function () {
		    categories = [
		      ["reebok", "converse", "lecoq", "nike", "lacoste", "adidas", "puma"],
		      ["tenis", "voleibol", "natacion", "futbol", "baloncesto"],
		      ["manchester", "milan", "madrid", "amsterdam", "praga"]
		    ];

		    chosenCategory = categories[Math.floor(Math.random() * categories.length)];
		    word = chosenCategory[Math.floor(Math.random() * chosenCategory.length)];
		    word = word.replace(/\s/g, "-");
		    console.log(word);
		    buttons();

		    geusses = [];
		    lives = 10;
		    counter = 0;
		    space = 0;
		    result();
		    comments();
		    selectCat();
		    canvas();
		  };

		  play();

		  // Hint

		  hint.onclick = function () {
		    hints = [
		      [
		        "En el nombre de esta marca se puede observar que se repite la E",
		        "En este logo se puede observar una estrella",
		        "En este logo se puede ver que hay un gallo",
		        "En su nombre encontramos una K",
		        "En su logo se ve un cocodrilo ",
		        "En su logo se puede apresiar una especie de triangulo",
		        "En su logo hay un leopardo"
		      ],
		      [
		        "Se utilizan dos raquetas",
		        "Los equipos son divididos por una maya",
		        "Se nesecita de una piscina",
		        "Son 22 jugadores",
		        "Puedes obtener 3 puntos"
		      ],
		      [
		        "Ciudad del norte en el Reino Unido",
		        "Hogar de AC e Inter",
		        "Capital española",
		        "Capital holandesa",
		        "Capital de la República Checa"
		      ]
		    ];

		    var catagoryIndex = categories.indexOf(chosenCategory);
		    var hintIndex = chosenCategory.indexOf(word);
		    showClue.innerHTML = "Pista:-" + hints[catagoryIndex][hintIndex];
		  };

		  // Reset

		  document.getElementById("reset").onclick = function () {
		    correct.parentNode.removeChild(correct);
		    letters.parentNode.removeChild(letters);
		    showClue.innerHTML = "";
		    context.clearRect(0, 0, 400, 400);
		    play();
		  };
		};
  	</script>
  </body>
</html>