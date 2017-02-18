<?php
	
	abstract class CarroBase{
		public $cor;
		public $vel = 0;
	
		function CarroBase($cor){
			$this->cor = $cor;
		}
		
		function status(){
			echo "<hr/>";
			echo "cor: ".$this->cor;
			echo "<br/> Velocidade Máxima :". $this ->vel;
			echo "<hr/>";
		}
		
		final function cor(){
			echo "<hr/>";
			echo "<br/>Minha Cor: ".$this->cor;
			echo "<br/>Método Original ";
			echo "<hr/>";
		}
		
	}
	
	final class Carro extends CarroBase{
		/* métodos Finais não podem ser sobrescritos
		function Cor(){
			echo "<br/>Cor: ".$this->cor;
		}
		*/
	}
	
	final class Van extends CarroBase{
	}
	
	/*
	class Teste extends Van{
			Classes Finais, não podem ser extendidas
	}
	*/
	
	$carro1 = new Carro("vermelho");
	$van = new Van("Roxo");
	
	$carro1->cor();
	$van->cor();
	
	
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 20.6 - Final</title>
	</head>
	<body>
	
	</body>
</html>
