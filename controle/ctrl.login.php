<?php
// CONTROLE DE LOGIN
// SISTEMA DE ESTOQUE MVC
// 2019-09-03 GW
	session_start();
	include('../include/inc.login.php');
	// recebe valores
	$nome_login = $_POST['nome_login'];
	$pass_login = $_POST['pass_login'];
	//

	// validar dados usando classes
	$obj   = new login;
	$valor = $obj->logar($nome_login, $pass_login);

	$valid       = $valor['quant'];
	$nome_sessao = $valor['nome'];
	//
	
	if($valid == 1){
		$_SESSION['nome_login'] = $nome_login;
		$_SESSION['nome'] = $nome_sessao;
		header('location: ../visao/vw.principal.php');
	}else{
		unset ($_SESSION['nome_login']);
		unset ($_SESSION['nome']);
		header('location: ../index.php');
	}


?>