<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar funcionários</title>
    <?php
        include_once "../control/funcionarioControl.php";
        $dadosFuncionario = new Funcionario;
        $funcionarios = $dadosFuncionario->listarTodos();
    ?>
</head>
<body>
    <a href="cadastrarFuncionario.php">Cadastrar funcionário</a><br><br>
        <?php foreach($funcionarios as $funcionario): ?>
            <tr>
                <td><?php echo htmlspecialchars($funcionario['Nome']); ?></td>
                <td><?php echo htmlspecialchars($funcionario['Telefone']); ?></td>
                <td><?php echo htmlspecialchars($funcionario['Email']); ?></td>
                <td><?php echo htmlspecialchars($funcionario['Senha']); ?></td>
                <td><?php echo htmlspecialchars($funcionario['Cargo']); ?></td>
                <td><?php echo htmlspecialchars($funcionario['Id']); ?></td></br>
                <td>
                    <a href="deletarFuncionario.php?id=<?php echo ($funcionario['Id']); ?>">Deletar Funcionário</a>
                    <a href="editarFuncionario.php?id=<?php echo ($funcionario['Id']); ?>">Editar Funcionário</a></br></br>
                </td>
            </tr>
        <?php endforeach; ?>
    <br>Pesquisa específica por nome do funcionário:
    <form action="listarFuncionarioNome.php" method="POST">
        Nome:
        <input type="text" name="cxNomeFuncionario">
        <button>Enviar</button>
    </form>
</body>
</html>
