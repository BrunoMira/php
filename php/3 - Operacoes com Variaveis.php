<?php
	$num1 = 17;
	$num2 = 2;
	
	//Aritméticos (Matemáticos)
	$res = $num1 + $num2;
	echo "Soma de $num1 com $num2 = $res <br/>";
	
	$res = $num1 - $num2;
	echo "Subtração de $num1 com $num2 = $res <br/>";
	
	//divisão de números inteiros pode gerar floats, ex: 17/2 = 8.5 , 16/2 = 8
	$res = $num1 / $num2; 
	echo "Divisão de $num1 com $num2 = $res <br/>";
	
	$res = $num1 % $num2;
	echo "Resto da divisão de $num1 com $num2 = $res<br/>";
	
	$num1 += 1;
	echo "Adição de $num1";
	
	$num1 ++;
	echo "Adição de $num1 <br/>";
	
	// se a comparação der falso, ele não mostra nada, se for Verdadeiro, ele mostra 1
	$res = $num1 != $num2;
	echo $res;
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 3- Operações com Variáveis</title>
	</head>
	<body>
	
	</body>
</html>