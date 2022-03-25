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
  <link rel="stylesheet" type="text/css" href="../styles/estilo5.css">


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
              <a href="../index.php" class="nav-link">Home | </a>
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

  <section class="caixa">
    <!-- inicio sessao recentes -->
    <hr>
    <div class="produtos"> Produtos</div>
    <hr>
    <div class="container">
      <div class="row">


        <div class="col-md-4 mt-4">
          <div class="zoom">
            <div id="fig1">
              <a class="transp" href="sky.html"><img src="../img/caneca1.jpg" onmouseover="this.src='../img/caneca2.jpg'" onmouseout="this.src='../img/caneca1.jpg'"></a>
            </div>

            <h4>Caneca de Porcelana</h4>
            <br>
            <div id="preco">
              <div id="duracao"><b>R$25,00</b> </div>
              <div id="cart">
                <a href=""><i class="fas fa-shopping-cart"></i>COMPRAR</a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-4 mt-4">
          <div class="zoom">
            <div id="fig1">
              <a class="transp" href="sky.html"><img src="../img/camisaa.jpg" onmouseover="this.src='../img/camisa.jpg'" onmouseout="this.src='../img/camisaa.jpg'"></a>
            </div>


            <h4>Camisa Golf</h4>
            <br>
            <div id="preco">
              <div id="duracao"><b>R$35,00</b> </div>
              <div id="cart">
                <a href=""><i class="fas fa-shopping-cart"></i>COMPRAR</a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-4 mt-4">
          <div class="zoom">
            <div id="fig1">
              <a class="transp" href="sky.html"><img src="../img/camisa branca.jpg" onmouseover="this.src='../img/camisa brancaa.jpg'" onmouseout="this.src='../img/camisa branca.jpg'"></a>
            </div>


            <h4>Camisa Surf</h4>
            <br>
            <div id="preco">
              <div id="duracao"><b>R$35,00</b> </div>
              <div id="cart">
                <a href=""><i class="fas fa-shopping-cart"></i>COMPRAR</a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-4 mt-4">
          <div class="zoom">
            <div id="fig1">
              <a class="transp" href="sky.html"><img src="../img/samba.jpg" onmouseover="this.src='../img/doll.png'" onmouseout="this.src='../img/samba.jpg'"></a>
            </div>

            <h4>Samba/doll</h4>
            <br>
            <div id="preco">
              <div id="duracao"><b>R$35,00</b> </div>
              <div id="cart">
                <a href=""><i class="fas fa-shopping-cart"></i>COMPRAR</a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-4 mt-4">
          <div class="zoom">
            <div id="fig1">
              <a class="transp" href="sky.html"><img src="../img/chaveiro.jpeg" onmouseover="this.src='../img/chaveiro2.jpg'" onmouseout="this.src='../img/chaveiro.jpeg'"></a>
            </div>

            <h4>Chaveiro</h4>
            <br>
            <div id="preco">
              <div id="duracao"><b>R$10,00</b> </div>
              <div id="cart">
                <a href=""><i class="fas fa-shopping-cart"></i>COMPRAR</a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-4 mt-4">
          <div class="zoom">
            <div id="fig1">
              <a class="transp" href="sky.html"><img src="../img/caneca3.jpg" onmouseover="this.src='../img/caneca4.jpg'" onmouseout="this.src='../img/caneca3.jpg'"></a>
            </div>

            <h4>Caneca de Alumínio</h4>
            <br>
            <div id="preco">
              <div id="duracao"><b>R$20,00</b> </div>
              <div id="cart">
                <a href=""><i class="fas fa-shopping-cart"></i>COMPRAR</a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-4 mt-4">
          <div class="zoom">
            <div id="fig1">
              <a class="transp" href="sky.html"><img src="../img/tirante.png" onmouseover="this.src='../img/tirante2.jpg'" onmouseout="this.src='../img/tirante.png'"></a>
            </div>

            <h4>Tirante</h4>
            <br>
            <div id="preco">
              <div id="duracao"><b>R$10,00</b> </div>
              <div id="cart">
                <a href=""><i class="fas fa-shopping-cart"></i>COMPRAR</a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-4 mt-4">
          <div class="zoom">
            <div id="fig1">
              <a class="transp" href="sky.html"><img src="../img/mascara2.jpg" onmouseover="this.src='../img/mascara.jpg'" onmouseout="this.src='../img/mascara2.jpg'"></a>
            </div>

            <h4>Máscara</h4>
            <br>
            <div id="preco">
              <div id="duracao"><b>R$7,00</b> </div>
              <div id="cart">
                <a href=""><i class="fas fa-shopping-cart"></i>COMPRAR</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>



  </section><!-- fim sessao recentes -->


  <footer class="mt-4 mb-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <p>
            <a href="../index.php">Home</a>
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