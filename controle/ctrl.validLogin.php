<?php
////////////////////////////////////////
// script de validacao de login
// SISTEMA ESTOQUE
// 2019-09-04 - GW
/////////////////////////////////////////
	session_start();
	if((!isset ($_SESSION['nome_login']) == true) and (!isset ($_SESSION['nome']) == true)){
			unset($_SESSION['nome_login']);
  			unset($_SESSION['nome']);
  			header('location: ../index.php');
		}
?>