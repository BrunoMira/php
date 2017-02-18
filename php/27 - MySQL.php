<?php
	
	include "conexao.inc";
	
	$res = mysqli_query($conexao,"SELECT * FROM TB_CADASTROS");
	$linhas = mysqli_num_rows($res);
	
	
	echo "Encontrados $linhas registroas na tabela Cadastro";


	$nome = "a";
	$user = "a";
	$senha = "52";
	$email = "outro@exemplo.com";
	$tel = "321451";
	$status = 1;
	$obs = "OK";
	
	$query = "INSERT INTO tb_cadastros VALUES(NULL,'$nome','$user','$senha','$email','$tel',$status,'$obs')";
	
	$res = mysqli_query($conexao,$query);
	
	if( mysqli_affected_rows($res)!= -1 )
		echo "<br/>Dado inserido com sucesso";
	
	mysqli_close($conexao);
	
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 27 - MySQL</title>
	</head>
	<body>
	
	</body>
</html>
