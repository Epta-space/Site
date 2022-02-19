<?php
include_once '../connections/database.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../styles/estilo4.css">

  <title>EPTA</title>
</head>

<body>

  <head>
    <!-- inicio cabecalho -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container-fluid">
        <a href="#" class="navbar-brand">
          <img src="https://i.ibb.co/jD36ZX1/logobranco.jpg" width="142">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-principal">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home | </a>
            </li>
            <li class="nav-item">
              <a href="blog.php" class="nav-link">Blog | </a>
            </li>
            <li class="nav-item">
              <a href="cursos.php" class="nav-link">Cursos | </a>
            </li>
            <li class="nav-item">
              <a href="projetos.php" class="nav-link">Projetos | </a>
            </li>
            <li class="nav-item">
              <a href="quemSomos.php" class="nav-link">Quem Somos | </a>
            </li>
            <li class="nav-item">
              <a href="loja.php" class="nav-link">Loja </a>
            </li>

          </ul>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-dark my-sm-0" type="submit">
              <i class="fas fa-search"></i>
        </div>
      </div>
    </nav>
  </head><!-- fim cabecalho -->

  <div class="container">
    <div class="row ">
      <div class="col-md-12">
        <div id="texto">

          <div class="media">
            <div id="carousel-indicadores" class="carousel slide" data-ride="carousel">
              <!--Carousel -->

              <!-- Indicadores -->
              <ol class="carousel-indicators">

                <li class="active" data-target="#carousel-indicadores" data-slide-to="0"></li>

                <li data-target="#carousel-indicadores" data-slide-to="1"></li>

                <li data-target="#carousel-indicadores" data-slide-to="2"></li>

              </ol>

              <div class="carousel-inner">
                <!--Inner -->

                <div class="carousel-item active">
                  <img src="../img/caneca.jpg" width="410">
                </div>

                <div class="carousel-item">
                  <img src="../img/caneca1.jpg" width="410">
                </div>

                <div class="carousel-item">
                  <img src="../img/caneca.jpg" width="410">
                </div>



              </div>
              <!--/Inner -->

              <!-- Controles -->
              <a href="#carousel-indicadores" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>

              <a href="#carousel-indicadores" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div>
            <!--/Carousel -->

            <div class="media-body">
              <div id="titulo">CANECA DE PORCELANA</div>

              <div id="titulo2">Descrição do Produto</div>

              <div id="descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod mattis lacus
                id consequat. Donec porta interdum mi a aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Praesent euismod mattis lacus id consequat.</div>
              <div class="valor">R$25,00</div>

              <div class="box">
                <label for="name">Quantidade:</label>
                <div class="dec button">-</div>
                <input type="text" name="qty" id="1" value="0" class="input-filed">
                <div class="inc button">+</div>
              </div>
              <div class="preco">
                <div class="comprar">
                  <a href=""> COMPRAR
                    <i class="fas fa-shopping-cart"></i>
                </div>
                </a>

              </div>
              <script>
                var incrementButton = document.getElementsByClassName('inc');
                var decrementButton = document.getElementsByClassName('dec');

                for (var i = 0; i < incrementButton.length; i++) {
                  var button = incrementButton[i];
                  button.addEventListener('click', function(event) {
                    var buttonClicked = event.target;

                    var input = buttonClicked.parentElement.children[2];
                    var inputValue = input.value;
                    console.log(inputValue);
                    var newValue = parseInt(inputValue) + 1;
                    console.log(newValue);
                    input.value = newValue;
                  })
                }

                for (var i = 0; i < decrementButton.length; i++) {
                  var button = decrementButton[i];
                  button.addEventListener('click', function(event) {
                    var buttonClicked = event.target;

                    var input = buttonClicked.parentElement.children[2];
                    var inputValue = input.value;
                    console.log(inputValue);
                    var newValue = parseInt(inputValue) - 1;
                    if (newValue >= 0) {
                      input.value = newValue;
                    } else {
                      input.value = 0;
                    }
                  })
                }
              </script>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>


  <hr>
  <footer class="mt-4 mb-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <p>
            <a href="index.php">Home</a>
            <a href="blog.php">Blog</a>
            <a href="projetos.php">Projetos</a>
            <a href="cursos.php">Cursos</a>
            <a href="quemSomos.php">Quem Somos</a>
          </p>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
          <a href="https://www.facebook.com/eptarocketdesign/" class="btn btn-outline-dark ml-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://github.com/Epta-space" class="btn btn-outline-dark ml-2">
            <i class="fab fa-github"></i>
          </a>
          <a href="https://www.instagram.com/equipe_epta/" class="btn btn-outline-dark ml-2">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://bo.linkedin.com/company/equipe-de-propuls%C3%A3o-e-tecnologia-aeroespacial-epta" class="btn btn-outline-dark ml-2">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>

    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>