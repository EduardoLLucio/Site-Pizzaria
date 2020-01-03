<?php
session_start();
include 'conexao.php';
$consulta = "SELECT * FROM pedido";
$con = $conexao->query($consulta) or die($mysqli->error);
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
              <a href="fazerPedidos.php" class="nav-link" href="#">Fazer Pedido <span class="sr-only">(atual)</span></a>
            </li>
            
             <li class="nav-item">
              <a href="Cardapio.php" class="nav-link" href="#">Cardapio</a>
            </li>
            <li class="nav-item">
              <a  href="index.php" class="nav-link" href="#">Inicio</a>
            </li>
          </ul>
         
        </div>
      </nav>
    </header>
    
<br>


    
    <div class="table-responsive">
<table class="table table-sm table-dark ">

  <thead>
    <tr>
    
     
    <th scope="col">#</th>    
    <th scope="col">Nome do cliente</th>
    <th scope="col">Mesa do Cliente</th>
  	<th scope="col">Pizza</th>
  	<th scope="col">Pedido entregue</th>
  	
  		
      
     </tr>
  <?php while($dado = $con->fetch_array()) { ?>
  
  <tr>
  
  <td> <?php echo $dado["idpedido"]?></td> 
  <td> <?php echo $dado["nomecliente"]?></td> 
  <td> <?php echo $dado["mesa"]?> </td> 
  <td> <?php echo $dado["pizza"]?> </td> 
   <th><a  style="color: #7FFFD4" href="javascript: if(confirm('Tem certeza que deseja deletar mesmo o pedido do Sr.<?php echo $dado["nomecliente"]; ?>?'))
			location.href='excluirPedido.php?p=deletar&nomecliente=<?php echo $dado["idpedido"]; ?>';">Pedido entregue</a></th>
    
    
    
     </tr>
      <?php } ?>
      
     </thead>
 
    
    
        </table>
    
       </div>
              </div>
       
       
    
             <style>
    body {
    background-color: #DEB887;
    }
      </style>   
   
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="js/holder.min.js"></script>

  </body>
</html>