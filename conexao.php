<?php 

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'pizza');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB)  or die('Nao foi poss�vel a conexao');
?>