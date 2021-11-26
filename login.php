<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="css/style.css"  rel="stylesheet">
    <script src="js/login.js"></script>
    <!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1949876838513375');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1949876838513375&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
    <form name="login" action="validar/valida.php" method="POST" onsubmit="return validar()">
        <h1>Entrar</h1>
        <h5>Logue para acessar o Painel de Usuário</h5><br>
    <div>
        <label for="email"></label>
        <input type="text" id="email" name="email" placeholder="E-mail">
        </div>
        <div>
        <label for="senha"></label>
        <input type="password" id="senha" name="senha" placeholder="Senha">
        </div>
        <div class="button">
        <button type="submit" value="Entrar" name="sbt">Entrar</button>
        </div>
        <div>
        <a href="cadastro.html">Cadastre-se</a>
        </div>
    </div>
    </form>
    <p class="text-center text-danger">
        <?php if (isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
        }?>
    <footer>
        <div id="footer"><img src="img/Vector.svg" alt=""></div>
        <div id="footer"><img src="img/Vector2.svg" alt=""></div>
        <div id="textfooter">Todos os direitos reservados - Erro 404</div>
    </footer>
    

</body>

</html>