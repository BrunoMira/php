<?php
	
	//Variáveis
	$vnome = "Bruno";
	$vnum = 10;
	$vnum2 = 20.5;
	$soma = 10 + 20;
	
	// Constantes
	define("NOME","Bruno");
	define("VER",PHP_VERSION);
	define("DIR",__DIR__);
	
	echo "Nome: $vnome<br/>";
	$vnome = "Campos";
	echo "Nome: $vnome<br/>";
	$vnome = "Bruno";
	echo "Nome: ". $vnome. "<br/>"; // '.' é o modo de concatenação entre uma string e uma variável
	
	echo "Soma: $soma<br/>";
	
	echo "<hr/>";
	echo "Cosntante nome: ".NOME."<br/>";
	
	echo __FILE__ ;
	// __???__ significa uma constante pré determinada
	
	echo "Nome do Arquivo: ".__FILE__."<br/>";
	echo "Versão: ".VER."<br/>";
	echo "Diretorio: ".DIR;
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 2- constantes e variáveis</title>
	</head>
	<body>
	
	</body>
</html>