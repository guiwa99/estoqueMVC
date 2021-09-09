<?php
	include('../modelo/condb.php');

	// receber valores
	$descr_produto = $_POST['descr_produto'];
	
	$sql = "DELETE FROM produto WHERE produto.produtoId = ".$descr_produto."";

	if(mysqli_query($conecta,$sql)){
		echo "Produto deletado com sucesso!";	
	}

?>