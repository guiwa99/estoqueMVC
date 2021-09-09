<?php
// CONEXAO COM O BANCO DE DADOS
// SISTEMA DE LOGIN MVC
// 2019-09-03 GW

	$conecta = mysqli_connect('localhost', 'root', '', 'controle_de_estoque')
		or print (mysqli_error());

?>