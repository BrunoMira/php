<?php
	$cont = 0;
	$tamanho = 10;
	$vet = array($tamanho);
	
	while( $cont != $tamanho ) {
		echo "Contando $cont <br/>";
		$cont++;
	}
	
	echo "<br/><hr/><br/>";
	
	$cont = 0;
	
	while( $cont < $tamanho ) {
		$vet[$cont] = "PHP Version $cont";
		$cont++;
	}
	
	$cont = 0;
	
	while( $tamanho > $cont ){
		echo "vet[$cont] = $vet[$cont] <br/>";
		$cont++;
	}
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 7 - Loop While</title>
	</head>
	<body>
	
	</body>
</html>