<?php
	
	$transporte = array(
		"Carro","Moto","Bicicleta",
		"Ônibus","Caminhão","Avião",
		"Navio"
	);
	
	foreach($transporte as $veiculo){
		echo $veiculo."<br/>";
		
		/*
		if ($veiculo == "Bicicleta")
			break;
		*/
	}
	
	echo "<br/><hr/><br/>";
	
	foreach($transporte as $veiculo){
		if($veiculo == "Avião")
			echo "$veiculo Está na Lista! <br/>";
		
		if($veiculo == "Bicicleta")
			echo "$veiculo Está na Lista! <br/>";
		
	}
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 10 - Loop ForEach</title>
	</head>
	<body>
	
	</body>
</html>