<?php
	
	session_start(); // basta iniciar a sessão e chamar pelo nome da variável

	if($_SESSION['vlog']=='s'){
		
		$_SESSION['vpg1'] = "Texto da Pagina 1";
		
		echo $_SESSION['vnome']." ". $_SESSION['vpg1'];
		
		echo "<br/> <a href=pg2.php target=_self>Abre pg2</a> <br/> ";
	
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 19 - Sessões</title>
	</head>
	<body>
	
	</body>
</html>

<?php
	}else{
		echo "Acesso Negado...";
	}
?>