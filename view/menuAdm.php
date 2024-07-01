<?php
include_once "../control/gerenciadorSessao.php";
include_once "../control/verificarSessao.php";

GerenciadorSessao::iniciarSessao(); // Inicia a sessão usando a classe GerenciadorSessao
VerificarSessao::verificarAcesso(VerificarSessao::ADMINISTRADORES); // Verifica se o usuário é um administrador
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Administrador</title>
</head>
<body>
    <h1>Bem-vindo, Administrador!</h1>
    <ul>
        <a href="gerenciarFuncionario.php">Gerenciar funcionários</a> <br>
        <a href="gerenciarProduto.php">Gerenciar produtos</a><br>
        <a href="../control/logout.php">Sair</a><br>
    </ul>
</body>
</html>
