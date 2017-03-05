<?php
	
	$valores = array(1,3,5,7,9,12,6,4,20,18);
	
	function mostrarArray($valores){
		print_r($valores);
		//var_dump($valores);
		//var_export($valores);
	}

	function quebraDeTextp($val){
		$quebrar_palavras = false;
		$numero_de_caracteres = 22;
		$texto = " the quick brown fox jumps over the lazy dog";
		$texto_quebrado = wordwrap($texto, $numero_de_caracteres, "<br/>\n", $quebrar_palavras);
		echo $texto_quebrado;
	}

	function aula12() {
		
		echo "Texto dentro de uma função <br/>";
		
	}
	
	function soma( $a, $b ){
		echo "$a + $b = ", $a+$b;
	}
	
	function soma2( $a , $b ) {
		$res = $a + $b;
		return $res;
	}
	
	function media($val){
		$i = count($val);
		$soma = 0;
		for($cont = 0; $cont < $i; $cont++)
			$soma += $val[$cont];
		
		return $soma / $i;
	}
	
	
	aula12();

	mostrarArray($valores); 
	echo "<br/>";
	quebraDeTextp($valores);
	echo "<br/>";
	soma(2,2);
	echo "<br/>";
	echo "Valor = ", soma2(10,20);
	echo "<br/>";
	echo "Media = ", media($valores);
	
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 12 - Funções</title>
	</head>
	<body>
	
	</body>
</html>