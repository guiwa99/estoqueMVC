<?php
	include('../controle/ctrl.validLogin.php');
?>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de produto</title>
	<link rel="stylesheet" type="text/css" href="../style/estilo.css"/>
</head>

<body>
	<h1>CADASTRO DE PRODUTO</h1><br>
	<?php
	include('../menu/nav.php');
	?>
	<br><br><br>
	<form method="post" action="../controle/ctrl.cadProd.php">
		<p>
			<label for="descr_produto">Descrição do produto</label>
			<input id="descr_produto" name="descr_produto" required="required" type="text" placeholder="Ex: Paracetamol"/>
		</p>
		
		<p>
			<label for="categoria">Categoria</label>
			<select  name="categoria" required>
				<option value="" selected>Selecione uma categoria</option>
				<option value="1">Antibiótico</option>
				<option value="2">Anti-flamatório</option>
				<option value="3">Analgésico</option>
				<option value="4">Relaxante muscular</option>
			</select>
		</p>
		
		<p>
			<label for="fornecedor">Fornecedor</label>
				<select name="fornecedor" required>
					<option value="" selected>Selecione um fornecedor</option>
					<option value="1">GAM</option>
					<option value="2">Cirúrtica Santa Cruz</option>
					<option value="3">Dimed</option>
				</select>
		</p>
		
		<p>
			<label for="marca">Marca</label>
				<select name="marca" required>
					<option value="" selected>Selecione uma marca</option>
					<option value="1">Medley</option>
					<option value="2">Gemed</option>
					<option value="3">Eurofarma</option>
				</select>
		</p>
		<br>
		<p>
			<input type="submit" value="Cadastrar produto"/>
		</p>
</body>
</html>