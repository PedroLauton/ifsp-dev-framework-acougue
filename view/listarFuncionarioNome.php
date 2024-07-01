<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Funcionários</title>
    <?php
        include_once "../control/funcionarioControl.php";
        $dadosFuncionarios = new Funcionario;
        
        $nome = $_POST['cxNomeFuncionario'];
        $funcionarios = $dadosFuncionarios->listarPorNome($nome);
    ?>
</head>
<body>
    <?php if (!empty($funcionarios)): ?>
        <?php foreach($funcionarios as $funcionario): ?>
            <tr>
                <td><?php echo htmlspecialchars($funcionario['Nome']); ?></td>
                <td><?php echo htmlspecialchars($funcionario['Telefone']); ?></td>
                <td><?php echo htmlspecialchars($funcionario['Email']); ?></td>
                <td><?php echo htmlspecialchars($funcionario['Cargo']); ?></td>
                <td><?php echo htmlspecialchars($funcionario['Foto']); ?></td>
                <td>
                    <a href="deletarFuncionario.php?id=<?php echo $funcionario['Id']; ?>">Deletar</a>
                    <a href="editarFuncionario.php?id=<?php echo $funcionario['Id']; ?>">Editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhum funcionário encontrado.</p>
    <?php endif; ?>
    <br>
    <form action="" method="POST">
        Pesquisa específica por nome do funcionário:<br>
        <input type="text" name="cxNomeFuncionario">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
