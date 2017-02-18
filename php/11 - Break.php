<?php
	
	$vet = array(
		"Mouse","Teclado","Monitor",
		"Memória","sair","Microfone",
		"Impressora"
	);
	
	//count faz a contagem de elementos de um array, parecido com array.len(vetor)
	$tam = count($vet);
	
	$i = 0;

	echo "<h3>Loop While</h3> <br/>";
	
	while( $i < $tam ){

		if($vet[$i] == "sair")
			break;
		
		echo $vet[$i]."<br/>";
		
		$i++;
	}
	
	echo "<hr/>";
	
	echo "<h3>Loop For</h3> <br/>";
	
	for($i = 0; $i < $tam; $i++){
		if($vet[$i] == "sair")
			break;
		
		echo $vet[$i]."<br/>";
	}
	
	echo "<h3>Loop ForEach</h3> <br/>";
	
	foreach($vet as $pc){

		if($pc == "sair")
			break;
		
		echo $pc."<br/>";
	}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 11 - Break</title>
	</head>
	<body>
	
	</body>
</html>