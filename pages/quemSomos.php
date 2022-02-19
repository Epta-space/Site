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
  <link rel="stylesheet" type="text/css" href="../styles/estilo.css">
  <link rel="stylesheet" type="text/css" href="../styles/estilo3.css">
  <link rel="stylesheet" type="text/css" href="../styles/quemSomos.css">

  <title>Quem Somos</title>
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
              <a href="quemSomos.php" class="nav-link">Quem Somos </a>
            </li>
            <!-- <li class="nav-item">
                    <a href="loja.php" class="nav-link">Loja </a>
                  </li>   -->
          </ul>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-dark my-sm-0" type="submit">
              <i class="fas fa-search"></i>
        </div>
      </div>
    </nav>
  </head><!-- fim cabecalho -->

  <main>
    <div class="dividir">
      <img id="epta_logo" class="test" src="https://i.ibb.co/17BkS7z/42521677-1118288338330299-4395508705123106816-n-2.jpg" >
    </div>
    <h1 class="centro"> Quem somos </h1>
    <p class="centro">
      Apesar de nova a Equipe de Propulsão e Tecnologia Aeroespacial conquistou muitos
      feitos, e continua ainda hoje se desafiando, se superando e buscando espaço no meio do foguete
      modelismo universitário assim como conquistou seu espaço no meio acadêmico e de pesquisa.
      A equipe se orgulha por defender e apoiar a pesquisa brasileira gratuita e de qualidade
      fornecida por nossa universidade. Se orgulha também por defender qualquer tipo de
      preconceito e injustiça, e buscar acima de tudo igualdade dentro e fora da equipe.
    </p>
    <h1 class="centro">Áreas</h1>

    <section class="caixa">
      <!-- primeira area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Aviônica</h2>
              <p>
              A aviônica é o subsistema responsável pela parte eletrônica e eletromecânica de um foguete, tanto o sistema
              embarcado, quanto o de ignição. Abrangendo conhecimentos de instrumentação, eletrônica e programação, a
              subequipe visa a captação de dados de voo e a utilização de telemetria para análise em tempo real de informações.
              Além disso, é a área a que se encarrega a elaboração e a confecção dos circuitos de ignição do foguete e de
              acionamento do sistema de recuperação
              </p>
            </div>

          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/0FWVTH9/avionica.jpg" class="img-fluid img_quemsomos" ></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->

    <section class="caixa">
      <!-- segunda area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/yXwYskX/9705978-1041x739.jpg" class="img-fluid img_quemsomos" ></a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Propulsão</h2>
              <p>
              A Propulsão é responsável por fornecer movimento ao foguete. Ela desenvolve tanto os
              motores, como o combustível a ser utilizado. É rodeado de grande complexidade e perigos.
              Por isso, ela é tratada com extrema seriedade e seguindo com afinco os protocolos de
              segurança . Essa área carrega consigo um pouco do nome da equipe e isso é uma pequena
              amostra do peso que a área carrega.
              </p>


            </div>

          </div>

        </div>

      </div>

    </section><!-- fim conteudo -->

    <section class="caixa">
      <!-- terceira area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Entertainment</h2>
              <p>
                Desenvolvimento de aplicativos e jogos para android e computador, a princípio utilizando 
                a linguagem C# e a Unity engine. O objetivo da área é de divulgação da equipe de forma
                descontraída, além de servir como um dos meios de arrecadação da mesma (Monetização dos
                jogos através de anúncios ou venda de jogos). EPTA Space Program foi o primeiro jogo
                desenvolvido pela equipe e em seu lançamento teve mais de 1000 downloads, em 8 países diferentes.
                Todas as ilustrações, sons e músicas são desenvolvidas de forma autoral, dentro da equipe.
              </p>

            </div>



          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/3B2yk9x/entertaiment.png" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->

    <section class="caixa">
      <!-- quarta area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/DtDz4Mx/LEARNING-capa-site.png" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Learning</h2>
              <p>
              O EPTA Learning tem como objetivo alcançar o público geral levando a eles não só o conhecimento das tecnologias aeroespaciais,
              mas também de engenharias e ciência. Portanto, além da transmissão de conhecimento tem como função inspirar novas mentes e 
              incentivar os sonhos daqueles que se interessam por essas áreas.
              </p>
            </div>

          </div>

        </div>

      </div>

    </section><!-- fim conteudo -->

    <section class="caixa">
      <!-- quinta area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Administração e financeiro</h2>
              <p>
              A área visa melhorar os resultados apresentados pela equipe através do direcionamento em relação a metas e planejamentos, além
              de aumentar o valor do patrimônio por meio da geração de lucro líquido
              </p>

            </div>



          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/MfDBRnz/financeir.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->

    <section class="caixa">
      <!-- sexta area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/L6kqz5n/marketing-1024x536.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Marketing</h2>
              <p>
              Sendo o primeiro contato de uma pessoa externa com a EPTA, é a área responsável pela identidade visual da
              equipe, gerenciamento das redes sociais, envolvendo também o estudo do público alvo, para a criação de
              conteúdo mais efetiva!
              </p>


            </div>

          </div>

        </div>

      </div>

    </section><!-- fim conteudo -->
    <section class="caixa">
      <!-- setima area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Recuperação</h2>
              <p>
              A recuperação é a área que se certifica do retorno do foguete ao solo de maneira mais segura e menos
              prejudicial às suas estruturas e às pessoas presentes no lançamento. Para isso, é escolhida e projetada
              a geometria e as dimensões do paraquedas assim como o tamanho do conjunto de cordas, levando em consideração
              principalmente o apogeu e o raio de busca disponível. Nesta área, avaliamos diferentes métodos de ejeção do
              paraquedas, utilizando o que mais nos convweedsfrém e projetando seu sistema de travas e atuadores, como molas, elásticos
              e motores. O compromisso da recuperação é garantir um bom pouso ao foguete sem maiores danos.
              </p>

            </div>



          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/2ccNrR7/recuperacao.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->
    <section class="caixa">
      <!-- oitava area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/0BbzWxL/aerodin.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Estruturas</h2>
              <p>
                A área de estruturas da EPTA é responsável por determinar os efeitos de carga sofridos pela estrutura do
                foguete ao longo de toda sua missão garantindo assim que o mesmo completará sua operação sem sofrer danos.
                Para isso, a área de estruturas realiza cálculos e determina materiais e junções que possam suportar os
                esforços requeridos do fogueet. Além de realizar sua construção, uma tarefa complexa e que demanda tempo.
                Também é responsável pela base de lançamento.
              </p>


            </div>

          </div>

        </div>

      </div>

    </section><!-- fim conteudo -->

    <section class="caixa">
      <!-- nona area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Aerodinâmica</h2>
              <p>
              De um simples avião de papel a um ônibus espacial a Aerodinâmica é primordial para o projeto de qualquer
              aeronave, especialmente para nossa área de foguetemodelismo. Reduzir o arrasto, garantir a estabilidade em
              voo e a integração fluido-estrutural são os focos da área. Para isso, utilizamos simulações em CFD (Fluidodinâmica
              Computacional) e métodos analíticos - empregando Python™ e suas bibliotecas de forma a discretizar o modelo.
              Enfim, fabricamos nossos componentes e concretizamos o projeto com validações por túnel de vento e testes estruturais
              para efetuarmos um lançamento eficiente e seguro.
              </p>

            </div>

          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/82fJ3Lv/aerodinamica.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->

    <section class="caixa">
      <!-- decima area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/GTGqwh5/pesquisa.png" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Pesquisa</h2>
              <p>
                O incentivo a busca pelo conhecimento e a produção científica é muito importante para todos, e a equipe
                está inserida nesse meio. No diretório de pesquisa, os membros da equipe recebem o auxílio necessário para 
                desenvolverem artigos acadêmicos. Desde a busca por um tema, e encontrar um orientador, até a submisão do
                artigo, o diretório está a disposição do aluno. Qualquer membro pode realizar pesquisa referente a qualquer
                área com temas trabalhados pela EPTA.
              </p>


            </div>

          </div>

        </div>

      </div>

    </section><!-- fim conteudo -->

    <section class="caixa">
      <!-- nona area -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h2>Gestão de Pessoas</h2>
              <p>
              A gestão de pessoas gerencia os recursos humanos da equipe, responsável pela coleta de indicadores de engajamento
              por meio de pesquisas, manutenção do clima organizacional, supervisão e auxílio em feedbacks individuais e de equipe
              e a elaboração de capacitações gerais (liderança, comunicação, feedbacks, etc);
              </p>
            </div>

          </div>
          <div class="col-md-6">
            <div class="zoom">
              <img src="https://i.ibb.co/dmBdjWk/gp.jpg" class="img-fluid img_quemsomos"></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- fim  conteudo -->
  </main>

  <section class="caixa">
    <!-- inicio fotos membros -->
    <div class="container">
      <div class="row members">
            <?php
            $query = "SELECT * FROM membros ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "
                  <div class='member_div'>
                    <img src='{$row['Imagem']}' class = 'member_img' width='100' height='100'>
                    <b class='info_membro'>{$row['Nome']}</b>
                    <p class='info_membro'>{$row['Area']}</p>
                  </div>              
                ";
              }
            } else {
              echo "Ainda não há nada por aqui";
            }
            ?>
      </div>
    </div>
  </section>




  <footer class="mt-4 mb-4">
    <div class="container">
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
</body>

</html>