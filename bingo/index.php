
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">     
    <link href="links/css/bootstrap.min.css" rel="stylesheet">
    <script src="links/js/bootstrap.bundle.min.js"></script>
    <script src="links/js/jquery.min.js"></script>
    <script src="links/js/bootstrap.min.js"></script>

    <title>Informativo Cartela</title>

  </head>

    <style type="text/css">
      .nav_cor_background {
        background-color: #AD1A1A;
      }

      .nav_link_color {
        color: #FFFFFF; 
      }

      #carousel_principal {
        width: 70%;
        margin: 0 auto;
      }

      .tamanho_img {
        min-height: 350px;
        max-height: 800px;
      }

      .centralizar {
        text-align: center;
        margin: 0 auto;
      }

      .img_add {
        width: 190px !important;
        height: 45px !important;

      }

      .img_alt {
        width: 200px !important;
        height: 45px !important;

      }

      .img_rec {
        width: 110px !important;
        height: 45px !important;

      }

      .img_new {
        width: 110px !important;
        height: 45px !important;

      }

      .foco {
        overflow: hidden;
      }

      .foco div {
        max-width: 100%;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
      }

      .foco:hover div {
        -moz-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
      }

    </style>

    <script type="text/javascript">
      
      $(function () {
        $('.carousel').carousel()

        $("#btn_nova_cartela").click(function() {
          window.open('cartela.php')
        });
      })


    </script>

  <body>

    <nav class="navbar navbar-expand-lg nav_cor_background">
      <a class="navbar-brand" href="#">
        <img src="img/logo_b.png" width="30" height="30" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link nav_link_color" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav_link_color" href="cartela.php" target="_blame">Cartela</a>
          </li>
        </ul>
        <!--
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        -->
      </div>
    </nav>

    <div id="carousel_principal" class="carousel slide carousel-fade tamanho_img" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel_principal" data-slide-to="0" class="active"></li>
        <li data-target="#carousel_principal" data-slide-to="1"></li>
        <li data-target="#carousel_principal" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 tamanho_img" src="img/cartela_limpa.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 tamanho_img" src="img/numero_cartela.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 tamanho_img" src="img/cartela_cheia.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel_principal" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel_principal" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <br />
    <hr class="featurette-divider">

    <div class="row featurette foco">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">
        <h1 class="featurette-heading centralizar titulo_principal">O que é ?</h1>
        <p class="lead centralizar">É uma cartela virtual onde é possível fazer as anotações dos números já sorteados, para os jogadores terem um melhor acompanhamento do jogo.</p>
        <br />
      </div>
      <div class="col-md-2">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette foco">
      <div class="col-md-12">
        <h1 class="featurette-heading centralizar">Como usar ?</h1>
        <br />
        <br />
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Adicionar / Excluir</h2>
        <p class="lead">Informar o número sorteado ou o que deseja excluir no campo ao lado do botão adicionar e clicar no botão que realiza a ação desejada (Adicionar ou excluir).</p>
      </div>
      <div class="col-md-3 order-md-1">
        <br />
       <img class="d-block w-100 img_add centralizar" src="img/add.png" alt="First slide">
      </div>
    </div>

    <hr class="featurette-divider">
    <br />

    <div class="row featurette foco">
      <div class="col-md-1"></div>
      <div class="col-md-6 order-md-1">
        <h2 class="featurette-heading">Alterar</h2>
        <p class="lead">Informar no campo De o número sorteado que deseja alterar e no campo Para o número que irá substitui-lo.</p>
      </div>
      <div class="col-md-5 order-md-2">
        <br />
        <img class="d-block w-100 img_alt centralizar" src="img/alterar.png" alt="First slide">
      </div>
    </div>

    <hr class="featurette-divider">
    <br />

    <div class="row featurette foco">
      <div class="col-md-1"></div>
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Recarregar</h2>
        <p class="lead">Caso atualizar a página e for necessário recuperar os números que estavam lançados, clique neste botão para recuperá-los.</p>
      </div>
      <div class="col-md-3 order-md-1">
        <br />
       <img class="d-block w-100 img_rec centralizar" src="img/rec.png" alt="First slide">
      </div>
    </div>

    <hr class="featurette-divider">
    <br />

    <div class="row featurette foco">
      <div class="col-md-1"></div>
      <div class="col-md-6 order-md-1">
        <h2 class="featurette-heading">Nova Cartela</h2>
        <p class="lead">Quando for iniciar uma nova cartela, clicar neste botão para que os números que foram sorteados anteriormente sejam apagados da memória e os novos sejam salvos.</p>
      </div>
      <div class="col-md-5 order-md-2">
        <br />
        <img class="d-block w-100 img_new centralizar" src="img/new.png" alt="First slide">
      </div>
    </div>

    <hr class="featurette-divider">
    <br />

    <div class="row featurette foco">
     <div class="col-md-2">
     </div>
     <div class="col-md-4 centralizar">
      <br />
      <h1>Para Abrir Uma Cartela</h1>
      <br />
     </div>
     <div class="col-md-4 centralizar">
      <br />
      <button class="btn btn-primary btn-lg" id="btn_nova_cartela">Clique Aqui</button>
      <br />
     </div>
     <div class="col-md-2">
     </div>
    </div>

    <hr class="featurette-divider">
    <br />

    <footer class="container">
      <p class="float-right"><a href="#">Voltar ao Top</a></p>
      <p>Cristopher G Lucas / christophercgl@outlook.com</p>
    </footer>

  </body>
</html>
