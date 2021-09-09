<?php
	include('../controle/ctrl.validLogin.php');
	include('../include/inc.date.php');
	$obj = new data;
	$saudacao = $obj->saudacao();
?>
<html>
<head>
<meta charset="utf-8">
	<title>Sistema de estoque</title>
	 <link rel="stylesheet" type="text/css" href="../style/estilo.css"/> 
</head>

<body>
	<h1>
		<?php
		echo $saudacao;
		?>
	</h1>
	<?php
		include('../menu/nav.php');
	?>
</body>
</html>