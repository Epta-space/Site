<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../styles/estilo.css">
  <link rel="stylesheet" type="text/css" href="../styles/Postblog.css">
  <title>PostCursos</title>
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
    <form action="../connections/sendCursos.php" method="POST">
      <!-- inicio do formulario -->

      <label for="Titulo">Curso</label>
      <input type="text" name="Titulo">

      <label for="Imagem">Imagem</label>
      <input type="text" name="Imagem">

      <label for="Conteudo">Conteudo</label>
      <textarea type="text" cols="60" rows="5" name="Conteudo"></textarea>

      <label for="Duracao">Duração</label>
      <input type="text" name="Duracao">

      <label for="Link">Link</label>
      <input type="text" name="Link">

      <label for="Tags">Tags</label>
      <input type="text" name="Tags">

      <button type="submit" name="enviar">Enviar</button>
    </form>
  </main>

</body>

</html>