

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 31 - Sistema de Login</title>
	</head>
	<body>
		
		<?php
			include "conexao.inc";
			
			$user = $_POST['i_usuario'];
			$senha = $_POST['i_senha'];
			
			$query = "Select * from tb_cadastros where username = '$user' AND senha = '$senha'";
			
			$resultado = mysqli_query($conexao,$query);
			
			$linhas = mysqli_affected_rows($conexao);
			
			if($linhas == 1){
				echo "Login efetuado com Sucesso!";
				$num = rand(100000,900000);
				setcookie("numLogin",$num); // cria um cookie para o usuário logado
				header("Location:logado.php?num1=$num"); //redireciona para uma nova página
				
			}else{
				
				echo "Login e/ou senha inválidos";
				echo "<br/><br/><a href='login.html'>voltar</a>";
			}
	
	
		?>
		
	</body>
</html>
