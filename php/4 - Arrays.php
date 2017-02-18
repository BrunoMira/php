<?php
	// iniciando um array, maneira estática
	$vet = array(6); 
	
	// iniciando array com valores
	$vet2 = array(100,200,300); 
	
	// array com indices
	$vet3 = array("nome"=>"Bruno","cidade"=>"BH","curso"=>"PHP"); 
	
	$mat = array(
			array("Carro1",65000),
			array("Carro2",35000),
			array("Carro3",50000)
		);
	
	$vet[0] = "Carro";
	$vet[1] = "Mota";
	$vet[2] = 10.6;
	$vet[3] = "Avião";
	$vet[4] = 4;
	// adicionando um conteúdo de um array com chave à outro simples
	$vet[5] = $vet3["nome"]; 
	
	echo "Array simples <br/>";
	echo $vet[0]."<br/>".$vet[1]."<br/>".$vet[2]."<br/>".$vet[3]."<br/>".$vet[4]."<br/>".$vet[5]."<br/>";
	echo "<br/><hr/><br/>";
	
	echo "Array inicializado com dados <br/>";
	echo $vet2[0]."<br/>".$vet2[1]."<br/>".$vet2[2]."<br/>";
	echo "<br/><hr/><br/>";
	
	echo "array com chaves e dados <br/>";
	echo $vet3["nome"]."<br/>".$vet3["cidade"]."<br/>".$vet3["curso"]."<br/>";
	echo "<br/><hr/><br/>";
	
	echo "Matriz <br/>";
	echo "Carro A ".$mat[0][0]." - Valor: ".$mat[0][1]."<br/>";
	echo "Carro B ".$mat[1][0]." - Valor: ".$mat[1][1]."<br/>";
	echo "Carro C ".$mat[2][0]." - Valor: ".$mat[2][1]."<br/>";
	echo "<br/><hr/><br/>";
	
	$cont = 0;
	
	echo "Elemtento de indice $cont = $vet[$cont]";
	
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 4- Arrays</title>
	</head>
	<body>
	
	</body>
</html>