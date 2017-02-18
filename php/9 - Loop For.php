<?php
	
	$i = 0;
	$tam = 5;
	$vet = array($tam);
	
	for($i = 0; $i < $tam ;$i++){
		echo "Variavel i = $i<br/>";
	}
	
	echo "<br/><hr/><br/>";
	
	for($i = 0; $i < $tam ;$i++){
		$vet[$i] = $i * 10;
		echo "ver[$i] = $vet[$i]<br/>";
	}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 9 - Loop For</title>
	</head>
	<body>
	
	</body>
</html>