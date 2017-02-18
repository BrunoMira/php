<?php
	
	$opc = 5; //1:Carro - 2:Moto - 3:Bicicleta - 4:Navio - 5:Avião
	
	switch($opc){
		case 1:
			echo "Carro";
			break;
		case 2:
			echo "Moto";
			break;
		case 3:
			echo "Bicicleta";
			break;
		case 4:
			echo "Navio";
			break;
		case 5:
			echo "Avião";
			break;
		default:
			echo "Não existe";
			break;
	}
	
	echo "<hr/>";
	
	switch($opc){
		case ($opc <= 3 and $opc > 0):
			echo "Transporte Terrestre";
			break;
	}
	
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 6- Switch Case</title>
	</head>
	<body>
	
	</body>
</html>