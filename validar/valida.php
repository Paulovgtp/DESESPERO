<?php
session_start();

include_once('../conex.php');

if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM usuario WHERE email = '$email' && senha = '$senha' LIMIT 1";
	$result = mysqli_query($conexao, $sql);
	$resultado = mysqli_fetch_assoc($result);

	if (empty($resultado)) {
		$_SESSION['loginErro'] = "Email ou senha invalidos";
		header("Location: ../login.php");
	} elseif (isset($resultado)) {
		header("Location: ../painel/painel.html");
	} else {
		$_SESSION['loginErro'] = "Email ou senha invalidos";
		header("Location: ../login.php");
	}
}
?>