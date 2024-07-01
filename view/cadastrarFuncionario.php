<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Funcionário</title>
</head>
<body>
    <form action="../model/inserirFuncionario.php" method="POST">
        Nome:
        <input type="text" name="cxNome" required><br><br>
        Telefone:
        <input type="text" name="cxTelefone" required><br><br>
        Email:
        <input type="email" name="cxEmail" required><br><br>
        Senha:
        <input type="password" name="cxSenha" required><br><br>
        Cargo:
            <select id="cargo" name="cxCargo">
                <option value="1">Auxiliar</option>
                <option value="2">Gerente</option>
                <option value="3">Chefe</option>
                <option value="4">CEO</option>
            </select><br><br>
        Foto:
        <input type="file" name="cxFoto" required><br><br>
        <button>Enviar</button>
    </form>
</body>
</html>