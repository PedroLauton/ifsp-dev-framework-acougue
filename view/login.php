<?php
    include_once "../control/gerenciadorSessao.php";

    GerenciadorSessao::verificarLogado();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="cabecalho__navegacao">
            <a href="vitrine.php"><img class="cabecalho__navegacao__logo" src="../img/logo.png" alt="Logo Açougu-E"></a>
            <span class="cabecalho__navegacao__Marca">Açougu-<span class="cabecalho__navegacao__Marca__Estilo">E</span></span>
        </nav>
    </header>
    <main class="container">
        <h1 class="container__titulo">Login</h1>
        <section class="container__login">
            <form class="container__login__form" action="../model/loginUsuario.php" method="POST">
                <div>
                    <span class="container__login__form__span">E-mail:</span>
                    <input class="container__login__form__input" type="email" name="cxEmail" required placeholder="Digite o seu e-mail"><br><br>
                    <span class="container__login__form__span">Senha:</span>
                    <input class="container__login__form__input" type="password" name="cxSenha" required placeholder="Digite a sua senha">
                </div>
                <span class="container__login__form__span__hierarquia">Hierarquia:</span>
                <div>
                    <input class="container__login__form__radio" type="radio" name="cxHierarquia" value="adm" id="Adm" required><span class="container__login__form__span__adm">Administrador</span>
                    <input class="container__login__form__radio" type="radio" name="cxHierarquia" value="func" id="Func" required><span class="container__login__form__span__func">Funcionário</span>
                </div>
                <button class="container__login__form__button" type="submit">Entrar</button>
            </form>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__centralizar">
            <span class="footer__centralizar__conteudo">+55 11 99999-9999 </span>
            <span class="footer__centralizar__conteudo">açougue@gmail.com</span>
            <span class="footer__centralizar__conteudo">©2024 Açougu-e. Todos os direitos reservados.</span>
        </div>
    </footer>
</body>
</html>
