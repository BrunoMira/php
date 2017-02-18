<?php
	
	class Carro{
		public $cor;
		public static $vel = 0;
		
		function Carro($cor){
			$this->cor = $cor;
			
		}
		
		function acelera($vel){
			self::$vel = $vel;
		}
		
		function status(){
			echo "<hr/>";
			echo "<br/>".$this->cor;
			echo "<br/>".self::$vel;
		}
		
	}
	
	
	$carro1 = new Carro("Vermelho");
	
	$carro2 = new Carro("Verde");
	
	$carro3 = new Carro("Azul");
	
	$carro1->status();
	$carro2->status();
	$carro3->status();
	
	echo "<hr/><br/>Velocidade Alterada <br/>";
	$carro1->acelera(100);
	
	$carro1->status();
	$carro2->status();
	$carro3->status();
	
	echo "<hr/><br/>Velocidade Alterada <br/>";
	$carro2->acelera(200);
	
	$carro1->status();
	$carro2->status();
	$carro3->status();
	
	echo "<hr/><br/>Velocidade Alterada <br/>";
	$carro3->acelera(999);
	
	$carro1->status();
	$carro2->status();
	$carro3->status();
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 20.5 - Estáticos</title>
	</head>
	<body>
	
	</body>
</html>
