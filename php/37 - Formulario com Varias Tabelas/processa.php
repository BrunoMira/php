<?php
	include "..\conexao.inc";
	
	$nome = $_POST['i_nome'];
	$uf = $_POST['s_uf'];
	$transporte = array(0,0,0,0);
	
	echo "Nome: $nome <br/> - Estado $uf";
	echo "Transporte Selecionados: <br/>";
	
	foreach($_POST['i_transporte'] as $veiculo){
		echo "$veiculo";
		$transporte[$veiculo - 1] = 1;
		
	}
	echo "<br/><br/>executando o sql<br/><br/>";
	$query = "insert into TB_PESQUISA values (NULL, '$nome', $uf, ".$transporte[0].", ".$transporte[1].", ".$transporte[2].", ".$transporte[3]." )";
	echo $query;
	$resultado = mysqli_query($conexao,$query);
					
					
	if($resultado)
		echo "Dados Salvos";
	
	mysqli_close($conexao);
?>
