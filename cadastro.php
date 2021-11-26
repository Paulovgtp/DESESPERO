<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link href="css/style.css"  rel="stylesheet">
    <script src="js/cadastro.js"></script>
</head>
<body>
    <form name="cadastro" action="processo.php" method="post" 
    onsubmit="return validar()">
        <h1>Cadastro</h1>
        <h5>Faça seu cadastro, é super rápido</h5><br>
    <div>
        <label for="usuario"></label>
        <input type="text" id="usuario" name="usuario" maxlength="40" placeholder="Usuário">
        </div>
        <div>
        <label for="senha"></label>
        <input type="email" id="email" name="email" maxlength="40" placeholder="E-mail">
        </div>
        <div>
            <label for="confirmar-senha"></label>
            <input type="password" id="senha" name="senha" maxlength="32" placeholder="Senha">
            </div>
        <div class="button">
            <button type=submit value="cadastro" onclick="return validarSenha()">Cadastrar</button>
        </div>
    </div>
    </form>
    <footer>
        <div id="footer"><img src="img/Vector.svg" alt="rodape"></div>
        <div id="footer"><img src="img/Vector2.svg" alt="rodape"></div>
        <div id="textfooter">Todos os direitos reservados - Erro 404</div>
        
    </footer>
</body>
</html>