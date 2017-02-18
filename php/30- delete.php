<?php
	
	include "conexao.inc";

	$nome = "df";
	
	$res = mysqli_query($conexao,"delete FROM tb_produto where nome = '$nome'");
	
	$linhas = mysqli_affected_rows($conexao);
	
	if( $linhas > 0 ){
			echo "<br/>$linhas registros excluidos<br/>";
			
		}
	else
		echo "<br/>Nenhum registros excluido";
	
	
	mysqli_close();
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 30 - Delete</title>
	</head>
	<body>
		
	</body>
</html>
