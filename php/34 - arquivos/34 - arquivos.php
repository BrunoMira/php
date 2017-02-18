<?php
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 34 - Arquivos</title>
	</head>
	<body>
		
		<?php
		
			//r = abre para leitura , ponteiro no início
			//r+ = Abre para leitura e escritra
			//w = Abre para escrita, ponteiro no inicío e zera, se o arquivo não existir ele cria
			//w+ = Abre para leitura e escritra
			//a = Abre para escrita, ponteiro no final, se arquivo não existir ele o cria
			//a+ = Abre para leitura e escritra
			//x = Abre p/escrita, ponteiro n oinício, se o arquivo já existir ele gera um erro do tipo E_WARNING
			//x+ - Abre para leitura e escrita
	
			$arquivo = fopen("aula.txt","a");
			
			fwrite($arquivo,"\r\n Continuação do texto");
			
			$arquivo = fopen("aula.txt","r");
			$conteudo = fread($arquivo,500);
			
			echo $conteudo;
			
			
			fclose($arquivo);
			
		?>
		
	</body>
</html>
