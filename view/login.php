<?php
include_once "../control/gerenciadorSessao.php";
include_once "../control/verificarSessao.php";

GerenciadorSessao::iniciarSessao(); // Inicia a sessão usando a classe GerenciadorSessao
verificarSessao::redirecionarUsuarioAutenticado(); // Redireciona o usuário autenticado para a página correspondente ao seu tipo de usuário

//acima temos a inclusão dos arquivos gerenciadorSessao.php e verificarSessao.php, que são responsáveis por iniciar a sessão e verificar se o usuário autenticado tem permissão para acessar determinada página, respectivamente. Caso o usuário autenticado já esteja logado, ele é redirecionado para a página correspondente ao seu tipo de usuário. Isso ocorre quando o usaurio esta na pagina vitrine.php e clica no botão de login, ele é redirecionado para a pagina de login.php, e se ele ja estiver logado, ele é redirecionado para a pagina correspondente ao seu tipo de usuario, seja ele administrador ou funcionario.


    
?>

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
        <input type="radio" name="cxHierarquia" value="adm" id="Adm" required>Administrador
        <input type="radio" name="cxHierarquia" value="func" id="Func" required>Funcionário<br><br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
