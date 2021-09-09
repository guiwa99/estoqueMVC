<?php
	class data{
		function saudacao(){
			date_default_timezone_set('America/Sao_paulo');		
			$nome = $_SESSION['nome'];
			$hora  = date("H"); 
			if($hora >= 0 and $hora < 6){
				$saud = "Boa madrugada, ";
			}else if($hora >= 6 and $hora < 12){
				$saud = "Bom dia, ".$nome."!";
			}else if($hora >= 12 and $hora < 18){
				$saud = "Boa tarde, ".$nome."!";
			}elseif($hora >= 18 and $hora <= 23){
				$saud = "Boa noite, ".$nome."!";
			}
		
			return $saud;
		}
	}
?>