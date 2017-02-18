<?php
	
	class Carro{
		var $tipo; // 1- Passeio ; 2-Esportivo; 3-Utilitario
		var $velMax; // 160 - 1 / 300 - 2 / 100 - 3
		var $nome;
		var $liga;
		var $velocidade;
		
		function Carro($tipo , $nome){
			$this -> liga = false;
			$this -> tipo = $tipo;
			$this -> nome = $nome;
			$this -> velocidade = 0;
			$this -> velMax = $this -> velocidadeMaxima($tipo);
		}
		
		function velocidadeMaxima($tipo){
			if($tipo == 1) return 160;
			if($tipo == 2) return 300;
			return 100;
		}
		
		function id(){
			echo "<hr/>";
			echo "Nome do Carro: ".$this->nome;
			echo "<br/> Tipo :". $this ->tipo;
			echo "<br/> Velocidade Máxima :". $this ->velMax;
			echo "<br/> Velocidade atual:". $this ->velocidade;
			
			if($this->liga){
				echo "<br/> Carro Ligado";
				
			}else{
				echo "<br/> Desligado";
				
			}
			
		}
	
		function ligar(){
			$this->liga = true;
		}
		
		function desligar(){
			$this->liga = false;
		}
		
		function velocidade($velo){
			if($velo > $this->velMax){
				$this->velocidade = $this->velMax;
			}else{
				$this->velocidade = $velo;
			}
			
		}
		
	}
	
	//instanciando Objeto Carro
	
	$carro1 = new Carro(2, "Escort");
	$carro1->velocidade(400);
	$carro1->id();
	
	$carro2 = new Carro(1, "Basic");
	$carro2->ligar();
	$carro2->id();
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 20 - Classes</title>
	</head>
	<body>
	
	</body>
</html>
