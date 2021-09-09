<?php
	class login{
		function logar($nome_login, $pass_login){
			include('../modelo/condb.php');
			$sql = "SELECT
					COUNT(*) as quant,
					nome     as nome
					FROM
					user
					WHERE
					user = '".$nome_login."'
					AND pass = '".$pass_login."'";
			
			$selecaoDB = mysqli_query($conecta, $sql);
			$consulta = mysqli_fetch_array($selecaoDB);
			$result = $consulta;
			
			mysqli_free_result($selecaoDB);
			mysqli_close($conecta);
			
			return $result;
		}
	}





?>

