<?php
include_once "../control/gerenciadorSessao.php";
include_once "../control/verificarSessao.php";

GerenciadorSessao::iniciarSessao(); // Inicia a sessão usando a classe GerenciadorSessao
VerificarSessao::verificarAcesso(VerificarSessao::FUNCIONARIOS); // Verifica se o usuário é um funcionário
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
</head>
<body>
    <a href="gerenciarProduto.php">Gerenciar produtos</a><br>
    <a href="../control/logout.php">Sair</a><br>
</body>
</html>