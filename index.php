<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>A melhor Pizzaria do Brasil</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a href="fazerPedidos.php" class="nav-link" href="#">Fazer Pedido <span class="sr-only">(atual)</span></a>
            </li>
            <li class="nav-item">
              <a  href="Cardapio.php" class="nav-link" href="#">Cardapio</a>
            </li>
             <li class="nav-item">
              <a href="pedidos.php" class="nav-link" href="#">Pedidos</a>
            </li>
          </ul>
         
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>         
           <li data-target="#myCarousel" data-slide-to="1"></li>
          
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="img/carda.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Cardapio</h1>
                <p>Veja o cardapio da casa</p>
                <p><a class="btn btn-lg btn-primary" href="Cardapio.php" role="button">Cardapio</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="img/caro2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
              
             <p>Voce sabia que pode excluir seu pedido quando quiser ?</p>
                <p><a class="btn btn-lg btn-primary" href="pedidos.php" role="button">Ver pedidos</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="img/titulo.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
            <h1>A melhor Pizzaria do Brasil</h1>
                <p>Monte sua pizza, a gente vai atender voce com muito amor.</p>
                <p><a class="btn btn-lg btn-primary" href="fazerPedidos.php" role="button">Fazer pedido</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Voltar</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Avançar</span>
        </a>
      </div>


      <!-- Mensagens de marketing e outras featurezinhas
      ================================================== -->
      <!-- Envolve o resto da página em outro container, para centralizar todo o conteúdo. -->

      <div class="container marketing">

        <!-- Três colunas de texto, abaixo do carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/cala.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Calabresa</h2>
            <p>A melhor pizza de calabresa da atualide.</p>

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/marga.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Marguerita</h2>
            <p>Umas das melhores pizzas de marguerita do mundo.</p>
        
            
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/vega.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Vegana</h2>
            <p>Umas das pizzas mais aclamadas dos veganos.</p>
           
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        </div>

        <hr class="featurette-divider">

       

 

             <style>
    body {
    background-color: #FFDEAD;
    }
      </style>   
            
              <!-- FOOTER -->
      <footer class="container">
        
        <p>&copy;SITE DE PIZZARIA &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
      </footer>
    </main>

   
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="js/holder.min.js"></script>
  </body>
</html>