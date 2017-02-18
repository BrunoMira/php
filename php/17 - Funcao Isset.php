<?php
	// Função Isset, nós diz se uma variável está definida
	
	
	if( isset($_POST["f_nome"]) ) {
		$vnome = $_POST["f_nome"];
		echo " $vnome Está definida <br/>";
	}else{
		echo "não está";
	
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 17 - Função Isset</title>
	</head>
	<body>
		<br/> <br/> 
		<form name="f_aula" method="post" action="17 - Funcao Isset.php">
			<label >Nome:</label> <br/>
			<input type="text" name="f_nome" /> <br/> 
			<input type="submit" name="enviar" /> <br/>
		<form/>
	
	</body>
</html>

<?php
	}
?>