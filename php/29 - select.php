<?php
	
	include "conexao.inc";

	$cont = 0;
	$res = mysqli_query($conexao,"SELECT * FROM tb_produto");
	
	
	$linhas = mysqli_num_rows($res);
	
	if( $linhas > 0 ){
			echo "<br/>$linhas registros encontrados<br/>";
			echo "<br/>Nome <br/>";
		}
	else
		echo "<br/>Nenhum registros encontrados";
	
	
	mysqli_close();
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 29 - Select</title>
	</head>
	<body>
		<table border="1">
		<tr>
			<td>Código</td><td>Produto</td><td>Preço</td><td>Quantidade</td>
		</tr>
			<?php
				while( $registro = mysqli_fetch_row($res) ){
					echo "<tr>";
					echo "<td>".$registro[0]."</td>";
					echo "<td>".$registro[1]."</td>";
					echo "<td>".$registro[2]."</td>";
					echo "<td>".$registro[3]."</td>";
					echo "<tr/>";
				}
				mysqli_close($conexao);
			?>
		</table>
	</body>
</html>
