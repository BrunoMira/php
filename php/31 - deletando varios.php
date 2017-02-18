<?php
	include "conexao.inc";
	
	function excluirVarios($conexao){
		$linhas = 0;
		foreach($_POST['sel'] as $codigo){
			
			$res = mysqli_query($conexao,"delete FROM tb_cadastros where codigo = '$codigo'");
			
			$linhas += mysqli_affected_rows($conexao);

		}
		
		if( $linhas > 0 ){
				echo "<br/>$linhas registros excluidos<br/>";
		}else{
			echo "<br/>Nenhum registros excluido";
		}
	}
	
	function listarCadastros($conexao){
	
		$sql = "SELECT * FROM tb_cadastros order by codigo";
		$resultado = mysqli_query($conexao,$sql);
		
		while( $registro = mysqli_fetch_row($resultado) ){
			
			echo "<tr>";
			echo "<td>$registro[0]</td>";
			echo "<td>$registro[1]</td>";
			echo "<td align=center><input type=checkbox value=$registro[0] name=sel[] /></td>";
			echo "</tr>";
		}
		
	}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 31 - Deletando Vários</title>
	</head>
	<body>
		<form name="f_excluir" method="post" action="31 - deletando varios.php">
			<table border="1">
				<tr>
					<td>Código</td>
					<td>Nome</td>
					<td>Selecionar</td>
				
				</tr>
				
				<?php
					if( isset($_POST['sel']) ){
						excluirVarios($conexao);
					}
					
					listarCadastros($conexao);
					mysqli_close($conexao);
				?>
			</table>
			<input type="submit" value="Excluir" name="bt_excluir"/>
		</form>
	</body>
</html>
