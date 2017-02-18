<?php
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 35 - Arquivos</title>
	</head>
	<body>
		
		<?php
		
			$nome = $_POST['i_nome'];
			$msg = $_POST['i_msg'];
			$conteudo = $msg."\r\n".$nome."\r\n";
			
			$file = fopen("visitas.txt","a");
			
			fwrite($file,$conteudo);
			
			echo "Mensagem Gravada: ". $conteudo;
			
			fclose($file);
			
			
		?>
		<a href="index.html" target="_self">Voltar</a>
	</body>
</html>
