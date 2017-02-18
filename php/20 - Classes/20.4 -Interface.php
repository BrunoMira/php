<?php
	
	interface CarroPadrao{
		function liga();
		function desliga();
		function status();
		function acelera();
		function freia();
	}
	
	interface CarroGuerra{
		function atiraCanhao();
		function atiraMetralhadora();
	}
	
	abstract class CarroBase implements CarroPadrao, CarroGuerra{
		public $potencia;
		public $velMax;
		private $ligado = false;
		
		function liga(){
			$this->ligado = true;
		}
		
		function desliga(){
			$this->ligado = false;
		}
		
		function status(){
			echo "<hr/>";
			echo "Potencia: ".$this->potencia;
			echo "<br/> Velocidade Máxima :". $this ->velMax;
			
			if($this ->ligado)
				echo "<br/> Ligado";
			else
				echo "<br/> Desligado";
		}
		function acelera(){}
		function freia(){}
		
		function atiraCanhao(){}
		function atiraMetralhadora(){}
	}
	
	class Carro extends CarroBase{
		function Carro($potencia, $velMax){
			$this->potencia = $potencia;
			$this->velMax = $velMax;
		}
	}
	
	$carro1 = new Carro(150,160);
	$carro1->status();
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 20.4 - Interfaces</title>
	</head>
	<body>
	
	</body>
</html>
