<?php
	function validarUsuario(){
		if( isset($_COOKIE["numLogin"]) ){
			$num1 = $_GET['num1'];
			$num2 = $_COOKIE["numLogin"];
			
			if( $num1 != $num2){
				echo "Login não efetuado";
				exit;
			}
				
		}else{
			echo "Login não efetuado";
			exit;
		}
		
		return $num1;
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
			
			echo"Bem-Vindo $num1";
			
			
		?>
	</body>
</html>