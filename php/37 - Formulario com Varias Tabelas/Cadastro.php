<?php
	include "..\conexao.inc";
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1">
		<title>Aula 37 - Formulário com várias tabelas</title>
	</head>
	<body>
		<h1>Pesquisa:</h1>
		
		<form name="f_cadastro" method="post" action="processa.php">
			
			<label>Nome:</label>
			<input type="text" name="i_nome"/><br/><br/>
			
			<label>Selecione seu estado:</label>
			<select name="s_uf">
				<?php
					$query = "SELECT * FROM TB_UF ORDER BY uf";
					$resultado = mysqli_query($conexao,$query);
					
					while($registro = mysqli_fetch_row($resultado)){
						
						echo "<option value=".$registro[0].">".$registro[1]."</option>";
					}
				?>
			</select>
			
			<br/>
			<label>Escolha um meio de transporte:</label>
			<br/>
				<?php
					$query = "SELECT * FROM TB_transporte";
					$resultado = mysqli_query($conexao,$query);
					
					while($registro = mysqli_fetch_row($resultado)){
						
						echo "<input type=checkbox value=".$registro[0]." name=i_transporte[] />". $registro[1];
					}
				?>
			
			<br/>
		
			<input type="submit" value="Gravar Pesquisa"/>
		</form>
		</form>
	</body>
</html>

<?php
	mysqli_close($conexao);
?>
