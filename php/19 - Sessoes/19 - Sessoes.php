<?php
	
	session_start();
	$_SESSION['vnome'] = "Bruno";
	$_SESSION['vtexto'] = "Texto para Teste";
	$_SESSION['vlog'] = "s";
	
	//unset($_SESSION['vnome']); remove uma variável da sessao
	
	echo "<a href=pg1.php target=_self>Abre pg1</a> <br/> ";
	
	echo $_SESSION['vnome'];
	echo "<br/> ". $_SESSION['vtexto']."<br/> ";
	
	if( isset($_SESSION['vpg2']) && isset($_SESSION['vpg1']) )
		echo $_SESSION['vpg1']." - ".$_SESSION['vpg2'];
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 19 - Sessões</title>
	</head>
	<body>
	
	</body>
</html>
