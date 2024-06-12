<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="../model/loginUsuario.php" method="POST">
        E-mail:
        <input type="email" name="cxEmail" required placeholder="Digite o seu e-mail"><br><br>
        Senha
        <input type="password" name="cxSenha" required placeholder="Digite a sua senha"><br><br><br>
        Hierarquia:<br>
        <input type="radio" name="cxHierarquia" value="adm" id="Adm">Administrador
        <input type="radio" name="cxHierarquia" value="func" id="Func">Funcionário<br><br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
