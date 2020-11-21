<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Escape Room - Memoria DOS</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
  	<style type="text/css">
  		body {
		  background: linear-gradient(to right,rgba(0, 0, 0, .8),rgba(0, 0, 0, 0.8)), url(img/bg-muerte.jpg) center top fixed no-repeat;
          		background-size: cover;
		  color: white;
		  font-family: arial;
		}
		body header {
		  height: 10vh;
		  width: 100%;
		  margin: 0 auto;
		  position: relative;
		}
		@media screen and (min-width: 37.4375em) {
		  body header {
		    width: 600px;
		  }
		}
		body header .timer {
		  display: table;
		  position: fixed;
	    padding: 5px 15px;
	    top: 0;
	    left: 3%;
	    font-size: 23px;
	    background: #F44336;
	    width: 60px;
	    height: auto;
	    line-height: 8vh;
	    border-radius: 2vh;
	    text-align: center;
	    margin-bottom: 50px;
	    float: right;
		}

		.game {
		  height: 90vh;
		  width: 100%;
		  position: relative;
		  margin: 0 auto;
		}
		@media screen and (min-width: 37.4375em) {
		  .game {
		    width: 600px;
		  }
		}

		.flip-container {
		  -webkit-perspective: 1000;
		  -moz-perspective: 1000;
		  perspective: 1000;
		  height: 22%;
		  margin: 1%;
		  cursor: pointer;
		}

		.flip-container.flip .flipper {
		  -webkit-transform: rotateY(180deg);
		  -moz-transform: rotateY(180deg);
		  -ms-transform: rotateY(180deg);
		  -o-transform: rotateY(180deg);
		  transform: rotateY(180deg);
		}

		.flip-container,
		.front,
		.back {
		  width: 23%;
		  float: left;
		  border-radius: 12px;
		}

		.flipper {
		  -webkit-transition: 0.6s;
		  -moz-transition: 0.6s;
		  transition: 0.6s;
		  -webkit-transform-style: preserve-3d;
		  -moz-transform-style: preserve-3d;
		  -ms-transform-style: preserve-3d;
		  -o-transform-style: preserve-3d;
		  transform-style: preserve-3d;
		  height: 100%;
		  position: relative;
		}
		.flipper .front,
		.flipper .back {
		  -webkit-backface-visibility: hidden;
		  backface-visibility: hidden;
		  -ms-backface-visibility: visible;
		  position: absolute;
		  top: 0;
		  left: 0;
		  height: 100%;
		  width: 100%;
		  box-shadow: #05293e 0 8px 2px;
		}
		.flipper .front {
		  -webkit-transform: rotateY(0deg);
		  -moz-transform: rotateY(0deg);
		  -ms-transform: rotateY(0deg);
		  -o-transform: rotateY(0deg);
		  transform: rotateY(0deg);
		  background: #041923;
		}
		.flipper .back {
		  -webkit-transform: rotateY(180deg);
		  -moz-transform: rotateY(180deg);
		  -ms-transform: rotateY(180deg);
		  -o-transform: rotateY(180deg);
		  transform: rotateY(180deg);
		  border: 1px solid #e8e8e8;
		}

		#img-1 {
		  background: white url("img/1.jpg") no-repeat center;
		  background-size: contain;
		}

		#img-2 {
		  background: white url("img/2.jpg") no-repeat center;
		  background-size: contain;
		}

		#img-3 {
		  background: white url("img/3.jpg") no-repeat center;
		  background-size: contain;
		}

		#img-4 {
		  background: white url("img/4.jpg") no-repeat center;
		  background-size: contain;
		}

		#img-5 {
		  background: white url("img/5.jpg") no-repeat center;
		  background-size: contain;
		}

		#img-6 {
		  background: white url("img/6.jpg") no-repeat center;
		  background-size: contain;
		}

		#img-7 {
		  background: white url("img/7.jpg") no-repeat center;
		  background-size: contain;
		}

		#img-8 {
		  background: white url("img/8.jpg") no-repeat center;
		  background-size: contain;
		}
  	
		.regresar {
          bottom: 50px;
          position: fixed;
          margin: auto;
          left: 3%;
          z-index: 5000;
    	}
    	.nuevoIntento {
          bottom: 50px;
          position: fixed;
          margin: auto;
          right: 3%;
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

<header><div class="timer">60</div>
</header>

  	<div class="container">
		<h1 style="color: #F44336; font-size: 18px; margin: 30px auto; text-align: center;">
  			Para acceder al codigo <br>
  			debes encontrar todas las parejas en menos de un minuto
  		</h1>
  		<p style="text-align: center;">
  			Para iniciar seleccione cualquier cuadro
  		</p>
  	</div>

  	
<div class="game">

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

  <div class="flip-container">
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>

</div>


<form class="form-inline text-center" role="form" action="JuegoMemoriaDos.php">
                  <input hidden="" type="text" id="nombre" name="nombre" value='<?php echo $nombre; ?>'>
                  <!-- inicio boton -->
                  <button class="btn btn-danger nuevoIntento" type="submit">Volver a intentarlo</button>
              </form>



  	<script type="text/javascript">
  		$(document).ready(function () {
		  //fallback for safari as it doesn't support vh
		  if (
		    navigator.userAgent.search("Safari") >= 0 &&
		    navigator.userAgent.search("Chrome") < 0
		  ) {
		    $(".game").height($(window).height() * 0.9);
		  }

		  var cards = [
		    "img-1",
		    "img-2",
		    "img-3",
		    "img-4",
		    "img-5",
		    "img-6",
		    "img-7",
		    "img-8"
		  ];
		  var pairs = cards.concat(cards); //create pairs of cards
		  var chosenCards = [];
		  var cardsToFlip = [];

		  var gameStarted = false;
		  var running = false;
		  var outOfTime = false;
		  var countdownStarted = false;
		  var win = false;
		  var pairCount = 0;
		  var time = 60;

		  shuffleArray(pairs); //shuffle cards

		  $(".back").each(function (i, element) {
		    $(this).attr("id", pairs[i]); //sets id in DOM for cards, access styles via css
		  });

		  $(".flip-container").click(function () {
		    if (!outOfTime) {
		      if (!gameStarted && !running) {
		        //before the game starts, show all cards to the user and flip back

		        running = true;

		        $(".flip-container").each(function () {
		          $(this).toggleClass("flip");
		        });

		        setTimeout(function () {
		          $(".flip-container").each(function () {
		            $(this).toggleClass("flip");
		          });

		          gameStarted = true;
		          running = false;
		        }, 2000);
		      } else if (
		        $(this).find(".back").attr("id") == chosenCards[0] &&
		        chosenCards[1] == null &&
		        $(this).hasClass("flip") &&
		        !running
		      ) {
		        running = true;

		        chosenCards[0] = null; //if one card has been chosen and then clicked again, flip back over
		        $(this).toggleClass("flip");

		        running = false;
		      } else if ($(this).hasClass("flip")) {
		        return; //if the card clicked is already flipped, return
		      } else if (
		        chosenCards[0] == null &&
		        chosenCards[1] == null &&
		        !$(this).hasClass("flip") &&
		        !running
		      ) {
		        if (!countdownStarted) {
		          countdown();
		        }

		        running = true;

		        chosenCards[0] = $(this).find(".back").attr("id"); //if no cards have been chosen, store the chosen card's in chosenCards[0]
		        $(this).toggleClass("flip");

		        running = false;
		      } else if (
		        chosenCards[0] != null &&
		        chosenCards[1] == null &&
		        !$(this).hasClass("flip") &&
		        !running
		      ) {
		        running = true;

		        chosenCards[1] = $(this).find(".back").attr("id"); //if no second card has been flipped, store the chosen card's brand in chosenCards[1] and flip it
		        $(this).toggleClass("flip");

		        if (chosenCards[0] == chosenCards[1]) {
		          chosenCards[0] = null;
		          chosenCards[1] = null;

		          pairCount++;

		          if (pairCount == cards.length) {
		            win = true;
		            alert("Lo ha conseguido. La clave es el numero de continentes del mundo");
		          }

		          running = false;
		        } else {
		          //if the brands did not match - empty the chosenCards & flip the cards back over

		          cardsToFlip[0] = chosenCards[0];
		          cardsToFlip[1] = chosenCards[1];

		          chosenCards[0] = null;
		          chosenCards[1] = null;

		          setTimeout(function () {
		            //flip back the chosen cards that did not match

		            $("*[id*=" + cardsToFlip[0] + "]").each(function () {
		              $(this).closest(".flip").toggleClass("flip");
		            });
		            $("*[id*=" + cardsToFlip[1] + "]").each(function () {
		              $(this).closest(".flip").toggleClass("flip");
		            });

		            running = false;
		          }, 800);
		        }
		      }
		    } else {
		      alert("Se te acabo el tiempo.");
		    }
		  }); //Flip Container Click End

		  function shuffleArray(array) {
		    for (var i = array.length - 1; i > 0; i--) {
		      var j = Math.floor(Math.random() * (i + 1));
		      var temp = array[i];
		      array[i] = array[j];
		      array[j] = temp;
		    }
		    return array;
		  }

		  function countdown() {
		    countdownStarted = true;

		    var timeStart = +new Date();
		    var timer = setInterval(function () {
		      var timeNow = +new Date();
		      var difference = (timeNow - timeStart) / 1000; //calculates time difference if game isn't in focus

		      if (time > 0 && !win) {
		        // if there is still time left and game isn't won, deduct time

		        time = 60;
		        time = Math.floor(time - difference);
		        $(".timer").text(time);
		      } else if (win) {
		        //stop timer when game is won

		        clearInterval(timer);
		      } else {
		        //stop timer when time is run out

		        outOfTime = true;
		        alert("Tu tiempo termino");

		        clearInterval(timer);
		      }
		    }, 250);
		  }
		}); //Document Ready End
  	</script>
  </body>
</html>