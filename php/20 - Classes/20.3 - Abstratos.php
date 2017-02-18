<?php
	
	abstract class CarroBase{
		public $potencia;
		public $velMax;
		public $portas;
		public $ligado = false;
		
		function ligar(){
			$this->ligado = true;
		}
		
		abstract function teste();
		
		function desligar(){
			$this->ligado = false;
		}
		
		function status(){
			echo "<hr/>";
			echo "Potencia: ".$this->potencia;
			echo "<br/> Velocidade Máxima :". $this ->velMax;
			echo "<br/> Velocidade Portas :". $this ->portas;
			if($this ->ligado)
				echo "<br/> Ligado";
			else
				echo "<br/> Desligado";
		}
	}
	
	
	class Carro extends CarroBase{
		
		function Carro($potencia, $velMax, $portas){
			$this->potencia = $potencia;
			$this->velMax = $velMax;
			$this->portas = $portas;
			$this->status();
		}
		
		function teste(){
			
		}
	}
	
	$carro1 = new Carro("1 Cavalo", 70, 2);
	
	//$carro1 = new CarroBase(); erro, classes abstratas não podem ser instanciadas
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 20.3 - Abstratas</title>
	</head>
	<body>
	
	</body>
</html>
