<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Funcionário</title>
    <?php
        include_once "../control/funcionarioControl.php";
        $dadosFuncionarios = new Funcionario;
        $id = $_GET['id'];
        $funcionarios = $dadosFuncionarios->listarPorId($id);
    ?>
</head>
<body>
    <?php if (!empty($funcionarios)): ?>
        <?php foreach($funcionarios as $funcionario): ?>
            <form action="../model/deletarFuncionarioModel.php" method="POST">
                <input type="hidden" name="IdFuncionario" value="<?php echo ($funcionario['Id']); ?>" >
                Nome: <?php echo $funcionario['Nome']; ?><br><br>
                Telefone: <?php echo $funcionario['Telefone']; ?><br><br>
                Email: <?php echo $funcionario['Email']; ?><br><br>
                Cargo: <?php echo $funcionario['Cargo']; ?><br><br>
                Foto: <?php echo $funcionario['Foto']; ?><br><br>
                <button type="submit">Deletar</button>
            </form>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Funcionário não encontrado.</p>
        <a href="gerenciarFuncionario.php">Voltar</a>
    <?php endif; ?>
</body>
</html>
