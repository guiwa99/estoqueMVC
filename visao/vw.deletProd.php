<?php
	include('../controle/ctrl.validLogin.php');
	include('../modelo/condb.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>Deletar um produto</title>
	<link rel="stylesheet" type="text/css" href="../style/estilo.css"/> 
</head>

<body>
	<h1>Deletar um produto</h1>
	<br>
	<?php
		include('../menu/nav.php');
	?>
	<br><br><br>
	<form method="post" action="../controle/ctrl.deletProd.php">
		<label for="descr_produto">Descricão do produto</label>
		<select name="descr_produto" required>
		<option value="">Selecione o produto</option>		
		<?php
			$sql = "SELECT produtoId as produtoId, descrProduto as descricao FROM produto";
		  
			$consulta = mysqli_query($conecta,$sql);
		
			while($result = mysqli_fetch_array($consulta)){
		?>
		<option value="<?php echo $result['produtoId']; ?>"><?php echo $result['descricao']; ?></option>
		<?php
			}
		?>
		</select>
		<br>
		<input type="submit" value="Deletar"/>
</body>
</html>