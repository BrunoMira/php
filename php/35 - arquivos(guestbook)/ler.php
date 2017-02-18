<?php
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 35 - Arquivos</title>
	</head>
	<body>
		
		<?php
		
			$file = fopen("visitas.txt","r");
			
			while( !feof($file) ){
				echo fgets($file,4096)."<br/>";
				echo fgets($file,100)."<br/>";
				echo "<hr/>";
			}
			
			fclose($file);
			
			
		?>
		<a href="index.html" target="_self">Voltar</a>
	</body>
</html>
