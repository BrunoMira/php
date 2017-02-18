<?php

	session_start();
	
	function validarUsuario(){
		if( isset($_SESSION['numLogin']) ){
			$num = $_GET['num1'];
			$userLogado = $_SESSION['Username'];
			$num2 = $_SESSION["numLogin"];
			
			if( $num != $num2){
				echo "Login não efetuado";
				exit;
			}
				
		}else{
			echo "Login não efetuado";
			exit;
		}
		
		return $num;
	}

			
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Logado</title>
	</head>
	<body>
		
		<?php
			$num1 = validarUsuario();
			
			echo "Bem-Vindo ".$_SESSION['Username'];
			
			unset($_SESSION['numLogin']);
			unset($_SESSION['Username']);
			$_SESSION = array(); // elimina todas as variáveis da sessão
			session_destroy();
		?>
	</body>
</html>