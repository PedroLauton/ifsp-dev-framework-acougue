<?php
include_once "../control/gerenciadorSessao.php";

GerenciadorSessao::iniciarSessao(); // Inicia a sessão usando a classe GerenciadorSessao

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuario_autenticado']) || $_SESSION['usuario_autenticado'] !== true) {
    header("Location: login.php");
    exit();
}

// Verifica se o usuário é um administrador
if ($_SESSION['contribuidor'] !== "administradores") {
    header("Location: login.php");
    exit();
}
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
        <a href="viewFuncionario/gerenciarFuncionario.php">Gerenciar funcionários</a> <br>
        <a href="viewProdutos/gerenciarProduto.php">Gerenciar produtos</a><br>
        <a href="../control/logout.php">Sair</a><br>
    </ul>
</body>
</html>
