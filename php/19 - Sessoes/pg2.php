<?php
	
	session_start(); // basta iniciar a sessão e chamar pelo nome da variável

	$_SESSION['vpg2'] = "Texto da Pg2";
	
	echo $_SESSION['vpg2'];
	
	
	echo "<a href='19 - Sessoes.php' target=_self>inicio</a> <br/> ";
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 19 - Sessões</title>
	</head>
	<body>
	
	</body>
</html>
