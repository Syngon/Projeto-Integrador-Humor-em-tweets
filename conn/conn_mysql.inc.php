<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "investeanjo";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}
	
?>