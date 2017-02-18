<?php
	/*
		Private apenas permite que os métodos acessem os atributos e/ou métodos
		da classe, ele não permite que nenhuma outra classe acesse, mesmo que possua herança
		
		Protected não permite o uso desses atributos fora do escopo da classe ou suas filhas
		mas uma filha pode utilizar seus atributos e/ou métodos
	*/
	class aula{
		protected $msg = "Bom dia";
		protected $email = "brunobru33@hotmail.com";
		protected $site = "www.google.com";
		
		protected function escreve(){ // escreve() só poderá ser chamado dentro de outro método livre, ex método escreve2() da classe canal
			echo "<hr/>";
			echo "<br/> Método da  (super)classe Aula";
			echo "<br/>".$this->msg;
			echo "<br/>".$this->email;
			echo "<br/>".$this->site;
		}
	}
	
	class canal extends aula{
		private $titulo = "Curso de PHP";
		private $nome = "Bruno";
		
		function escreve2(){
			echo "<hr/> ";
			echo "<br/> Método da (sub)classe Canal";
			echo "<br/>".$this->titulo;
			echo "<br/>".$this->nome;
			$this->escreve();
		}
	}
	
	$aula_OBJ = new aula();
	$canal_OBJ = new canal();
	
	//$aula_OBJ -> escreve();
	
	//$canal_OBJ -> escreve();
	$canal_OBJ -> escreve2();

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 20.2 - Herança</title>
	</head>
	<body>
	
	</body>
</html>
