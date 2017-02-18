<?php
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 36 - Contando Número de acessos</title>
	</head>
	<body>
		
		<?php
		
			
			$file = fopen("contador.txt","r");
			$contador = fread($file,9);//<-- número em bytes
			
			$contador++;
			
			$file = fopen("contador.txt","w");
			fwrite($file,$contador);
			
			echo "quantidade de acessos: ". $contador."<br/>";
			
			fclose($file);
			
			
		?>
		<a href="index.html" target="_self">Voltar</a>
	</body>
</html>
