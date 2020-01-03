<?php 
include_once ("conexao.php");

$pedi_codigo = intval($_GET['nomecliente']);

$sql_code = "DELETE FROM pedido WHERE idpedido = '$pedi_codigo'";
$sql_query = $conexao->query($sql_code) or die($conexao->error);

if($sql_query)
    echo "
		<script>
			alert('O usuário foi deletado com sucesso.');
			location.href='pedidos.php?p=inicial';
		</script>";
    else
        echo "
	<script>
		alert('Não foi possível deletar o usuário.');
		location.href='pedidos.php?p=inicial';
	</script>";
        
?>