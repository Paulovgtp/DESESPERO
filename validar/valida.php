<?php
	include_once ("conex.php")


((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_scape_string($conexao, $_POST['email'])
		$senha = mysqli_real_scape_string($conexao, $_POST['senha'])
		$senha = md5($senha);

		$sql = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha' LIMIT 1";
		$result = mysqli_query($conexao, $sql);
		$resultado = mysqli_fetch_assoc($result);

		if (empty($resultado)) {
			$_SESSION['loginErro'] = "Email ou senha invalidos";
			header("Location: login.php");
		}elseif (isset($resultado)) {
			header("Location: painel/painel.html");
		}else{
			$_SESSION['loginErro'] = "Email ou senha invalidos";
			header("Location: login.php");
		}
	}





?>