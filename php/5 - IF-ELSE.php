<?php
	
	$nota = 7;
	
	if($nota >= 10){
		echo "Aluno Aprovado";
	}else if($nota <= 2){
		echo "Recuperação";
	}else{
		echo "Reprovado";
	}
	
	if( ($nota >= 8) & ($nota <= 10) ){
		echo "Aluno Promissor";
	}else{
		echo "never mind";
	}
	
	
	if( $nota >= 8 && $nota <= 10 ){
		echo "Aluno Promissor";
	}
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 5- IF-ELSE</title>
	</head>
	<body>
	
	</body>
</html>