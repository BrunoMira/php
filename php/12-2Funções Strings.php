<?php
	
	function contar_e_retirar_chars(){

		$nome = "   josé da silva   ";
		echo(strlen($nome)); // 19

		$novo = trim($nome);

		echo(strlen($novo)); //13
	}

	function contar_palavras (){
		$frase = "eu vou estudar PHP";
		$count = str_word_count($frase,0);
		echo $count; // conta quantas palavras a frase possui
		$count = str_word_count($frase,1);
		print_r($count); // monta um array onde cada índice é uma palavra
		$count = str_word_count($frase,2);
		print_r($count); // mandem a frase dentro de um vetor [e][u][][v][o][u][][e][s][t][u][d]...
	}

	function separar_letras(){
		$frase = "eu vou estudar PHP";
		$letras = str_split($frase);
		echo $letras;
	}

	function substituir_chars(){
		$frase = "eu vou estudar PHP";
		$letras = implode("#",$frase);
		echo $letras;	
	}

	function ASC(){
		$letra = chr(67);
		echo $letra+"</br>";

		$letra = ord(F);
		echo $letra+"</br>";
	}

	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 12.2 - Funções Strings</title>
	</head>
	<body>
	
	</body>
</html>