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
  <link rel="stylesheet" type="text/css" href="../styles/estilo2.css">

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
              <a href="quemSomos.php" class="nav-link">Quem Somos </a>
            </li>
            <!-- <li class="nav-item">
                <a href="loja.php" class="nav-link">Loja </a>
              </li>   -->
          </ul>
          <form class="form-inline" action="pesquisar.php" method="POST">
            <input class="form-control mr-sm-2" type="text" name="Research" id="Research" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-dark my-sm-0" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>

        </div>
      </div>
      </div>
    </nav>
  </head><!-- fim cabecalho -->

  <div class="container">
    <div class="row ">

      <?php
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);

      $query = "SELECT * FROM projetos WHERE id LIKE {$queries['id']}";
      $result = mysqli_query($conn, $query);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='col-md-12'>
                    <div id='texto'>
                      <img src='{$row['Imagem']}' width='100%'>
                    </div>
                    <div id='titulo'>
                      <section>
                        <div class='sobrepor-titulo'>{$row['Titulo']}</div>
                      </section>
                    </div>
                    <div id='resumo'>{$row['Subtitulo']}</div>

                    <div id='autor'>
                      {$row['Data']} | por: {$row['Autor']}
                    </div>
                    <div id='materia'>{$row['Conteudo']}</div>
                  </div>
                  <div class='nome'>{$row['Autor']}</div>
                  <div class='media'>
                    <div class='imagem'>
                      <img class='mr-3' src={$row['Autor_Imagem']}> </div>
                    <div class='media-body'>{$row['Autor_Descricao']}</div>
                  </div>";
        }
      } else {
        echo "Aconteceu algum problema";
      }
      ?>

    </div>

  </div>
  </div>
  </div>
  <div id="relacionados" class="text-center">
    Textos Relacionados
  </div>
  <section class="caixa">
    <div class="container">
      <div class="row">
        <?php
          // Convertendo as tags em um array
          $queries = array();
          parse_str($_SERVER['QUERY_STRING'], $queries);

          $query = "SELECT * FROM projetos WHERE Tags LIKE '{$queries['tags']}' ORDER BY id DESC LIMIT 3";
          $result = mysqli_query($conn, $query);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='col-md-4'>
              <div class='zoom'>
    
              <a class='transp' href='projeto.php?id={$row['id']}&tags={$row['Tags']}'><img src='{$row['Imagem']}' class='img-fluid'></a>
    
                <h4>{$row['Titulo']}</h4>
    
                {$row['Subtitulo']}

                <div id='autor'><img class='mb-2' src='.{$row['Autor_Imagem']}' width='30' height='30'> Por: {$row['Autor']} | {$row['Data']}
                </div>
              </div>
            </div>";
            }
          } else {
            echo "";
          }
        ?>
      </div>
    </div>
  </section>

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