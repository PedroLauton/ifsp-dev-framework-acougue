<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro de Permissão</title>
</head>
<body>
    <h1>Acesso Negado</h1>
    <p>Você não tem permissão para acessar esta página.</p>
    <a href="../index.php">Voltar para a página inicial</a>
    <?php
    include_once "../control/gerenciadorSessao.php";
    include_once "../control/verificarSessao.php";

?>
</body>
</html>
