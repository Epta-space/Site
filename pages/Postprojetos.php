<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../styles/estilo.css">
  <link rel="stylesheet" type="text/css" href="../styles/Postblog.css">
  <title>PostProjetos</title>
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
    <form action="../connections/sendProjetos.php" method="POST">

      <label for="Titulo">Titulo</label>
      <input type="text" name="Titulo">

      <label for="Imagem">Imagem</label>
      <input type="img" name="Imagem">

      <label for="Subtitulo">Subtitulo</label>
      <input type="text" name="Subtitulo">

      <label for="Conteudo">Conteudo</label>
      <textarea type="text" cols="60" rows="5" name="Conteudo"></textarea>

      <label for="Autor">Autor</label>
      <input type="text" name="Autor">

      <label for="Autor_Imagem">Autor_Imagem</label>
      <input type="img" name="Autor_Imagem">

      <label for="Tags">Tags</label>
      <input type="text" name="Tags">

      <label for="Data">Data</label>
      <input type="text" name="Data">

      <button type="submit" name="enviar">Enviar</button>
    </form>
  </main>

</body>

</html>