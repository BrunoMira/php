<?php
	
	function aula($num){
		
		if($num != 0){
			echo "função Aula com valor $num <br/>";
			aula($num - 1);
		}
		return 0;
	}
	
	aula(10);
	
	// 4! = 4 * 3 * 2 * 1 = 24
	function fatorial($num){
		if($num < 0)
			return -1;
		if($num <= 1)
			return 1;
		else
			return $num * fatorial($num-1);
		
	}
	
	echo "<br/>".fatorial(6);
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 14 - Recursividade</title>
	</head>
	<body>
	
	</body>
</html>