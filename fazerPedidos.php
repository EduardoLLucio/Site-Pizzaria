<?php
session_start();
?>

<!doctype html>
<html lang="utf-8">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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
              <a href="index.php" class="nav-link" href="#">Inicio <span class="sr-only">(atual)</span></a>
            </li>
            
             <li class="nav-item">
              <a href="pedidos.php" class="nav-link" href="#">Pedidos</a>
            </li>
            <li class="nav-item">
              <a  href="Cardapio.php" class="nav-link" href="#">Cardapio</a>
            </li>
          </ul>
         
        </div>
      </nav>
    </header>
<br>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
 <div class="box">
 
 <form action="confgCadastrarPedido.php" method="POST">



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nomecliente">Nome cliente</label>
      <input type="text" class="form-control" id="nomecliente" name = "nomecliente" placeholder="Nome">
    
    </div>
    <div class="form-group col-md-6">
    <label for="pizza">Pizza</label>
    <input type="text" class="form-control" id= "pizza" name = "pizza" placeholder="Descricao">
  </div>
    <div class="form-group">
      <label for="mesa">Numero da mesa</label>
      <input type="number" class="form-control" id="mesa" name = "mesa"  placeholder="Numero da mesa">
    </div>
  </div>
  
   <style>
    body {
    background-color: #D2B48C;
    }
    </style>
 
  <button type="submit" class="btn btn-success" style="width: 200px; height: 50px">Salvar</button>
  </form>
  </div>
  </div>
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="js/holder.min.js"></script>

  </body>
</html>