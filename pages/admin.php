<?php
include_once '../connections/database.php'
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../styles/estilo.css">
  <link rel="stylesheet" type="text/css" href="../styles/Admin.css">
  <title>Admin</title>
</head>

<body>

  <head>
    <!-- inicio cabecalho -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="https://i.ibb.co/jD36ZX1/logobranco.jpg" width="142">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-principal">
          <ul class="navbar-nav ml-auto">


          </ul>

        </div>
      </div>
    </nav>
  </head><!-- fim cabecalho -->


  <main>

    <div>
      <p>Qual função vai realizar?</p>

      <form action="../connections/validacao.php" method="POST">

        <div>
          <label for="Blog">Blog </label>
          <input type="radio" id="radio-Blog" name="Tipo" value="Blog">

          <label for="Curso">Curso</label>
          <input type="radio" id="radio-Curso" name="Tipo" value="Curso">

          <label for="Projeto">Projeto</label>
          <input type="radio" id="radio-Pesquisa" name="Tipo" value="Pesquisa">
        </div>

        <label for="Login">Login</label>
        <input type="text" name="Login" id="Login">

        <label for="Senha">Senha</label>
        <input type="text" name="Senha" id="Senha">

        <button type="submit" name="enviar">Enviar</button>


      </form>
    </div>
  </main>


</body>

</html>