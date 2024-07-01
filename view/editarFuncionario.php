<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Produto</title>
    <?php
        include_once "../control/funcionarioControl.php";
        $dadosfuncionarios = new Funcionario;
        $id = $_GET['id'];
        $funcionarios = $dadosfuncionarios->listarPorId($id);
    ?>
</head>
<body>
    <?php if (!empty($funcionarios)): ?>
        <?php foreach($funcionarios as $funcionario): ?>
            <form action="../model/editarFuncionario.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="FuncionarioId" value="<?php echo ($funcionario['Id']); ?>">
                Nome:
                <input type="text" name="cxNome" value="<?php echo ($funcionario['Nome']); ?>" required><br><br>
                Telefone:
                <input type="text" name="cxTelefone" value="<?php echo ($funcionario['Telefone']); ?>" required><br><br>
                Email:
                <input type="email" name="cxEmail" value="<?php echo ($funcionario['Email']); ?>" required><br><br>
                Senha:
                <input type="text" name="cxSenha" value="<?php echo ($funcionario['Senha']); ?>" required><br><br>
                Cargo:
                <select id="cargo" name="cxCargo" required>
                    <option value="1" <?php echo ($funcionario['Cargo'] == 1) ? 'selected' : ''; ?>>Aves</option>
                    <option value="2" <?php echo ($funcionario['Cargo'] == 2) ? 'selected' : ''; ?>>Carne bovina</option>
                    <option value="3" <?php echo ($funcionario['Cargo'] == 3) ? 'selected' : ''; ?>>Carne suína</option>
                    <option value="4" <?php echo ($funcionario['Cargo'] == 4) ? 'selected' : ''; ?>>Frutos do mar</option>
                    <option value="5" <?php echo ($funcionario['Cargo'] == 5) ? 'selected' : ''; ?>>Queijos</option>
                </select><br><br>
                Foto atual:
                <img src="<?php echo htmlspecialchars($funcionario['Foto']); ?>" alt="Foto do funcionário" style="max-width: 200px;"><br><br>
                Nova foto:
                <input type="file" name="cxFoto"><br><br>
                <input type="hidden" name="fotoAtual" value="<?php echo ($funcionario['Foto']); ?>">
                <button type="submit">Enviar</button>
            </form>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Produto não encontrado.</p>
        <a href="gerenciarFuncionario.php">Voltar</a>
    <?php endif; ?>
</body>
</html>
