<?php
	
	include "conexao.inc";


	$nome = $_POST['nome'];
	$produto = $_POST['produto'];
	$preco = $_POST['preco'];
	$quantidade = $_POST['quantidade'];
	
	$query = "INSERT INTO tb_produto VALUES('$nome','$produto','$preco','$quantidade')";
	
	$res = mysqli_query($conexao,$query);
	$linhas = mysqli_affected_rows($conexao);
	
	if( $linhas > 0 )
		echo "<br/>Dado inserido com sucesso";
	
	mysqli_close($conexao);
	
	
?>
