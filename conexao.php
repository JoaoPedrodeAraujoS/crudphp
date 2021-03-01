<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$bd = "crudphp";

	if($connection = mysqli_connect($server, $user, $password, $bd)){
		//echo "Conexão Bem Sucedida!";
	}else{
		echo "Erro ao Conectar com o Banco de Dados!";
	}
?>