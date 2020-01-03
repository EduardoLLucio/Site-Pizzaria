<?php

include  ("conexao.php");


$nomecliente = $_POST['nomecliente'];
$mesa = $_POST['mesa'];
$pizza = $_POST['pizza'];



if ( $nomecliente != "" && $mesa != "" && $pizza != ""){
    
    mysqli_query($conexao, "INSERT into pedido ( nomecliente, mesa, pizza) VALUES ('$nomecliente', '$mesa', '$pizza')");
    
    ECHO "Dados cadastrados com sucesso !";
    header("Location: fazerPedidos.php");
    
}else {
    echo  "não foi possivel o cadastro! ";
    header("Location: fazerPedidos.php");
    
    
}









?>