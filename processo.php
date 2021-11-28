<?php
include_once ("conex.php");

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuario (usuario, email, senha) values ('$usuario', '$email', '$senha')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);


mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmação</title>
    <link href="css/style.css"  rel="stylesheet">
    <script src="js/cadastro.js"></script>
</head>
<body>
	<section>
		<center><h1> Confirmação de Cadastro </h1></center>
		<?php
		if($linhas ==1){
		print "Cadastro efetuado com sucesso!";
		}else{
		print "Cadastro NÃO efetuado. <br>Já existe um usuário com este e-mail!";
		}
		?>
	</section>
    <footer>
        <div id="footer"><img src="img/Vector.svg" alt="rodape"></div>
        <div id="footer"><img src="img/Vector2.svg" alt="rodape"></div>
        <div id="textfooter">Todos os direitos reservados - Erro 404</div>        
    </footer>
</body>
</html>