<?php

$hostname = "localhost";
$user = "root";
$password = "12345678";
$database = "cadastro";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if (!$conexao){
    echo "Falha na conexão com o Banco de Dados";
}
?>