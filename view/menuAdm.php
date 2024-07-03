<?php
    include_once "../control/gerenciadorSessao.php";
    include_once "../control/admUsuarioControl.php";
    
    GerenciadorSessao::verificaLoginAdm();

    $dados = new Administrador;
    $adm = $dados->listarAdm(GerenciadorSessao::obterSessao('Id'));
    $nomeAdm = $adm->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/menuAdm.css">
    <title>Menu Administrador</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="cabecalho__navegacao">
            <a href="vitrine.php"><img class="cabecalho__navegacao__logo" src="../img/logo.png" alt="Logo Açougu-E"></a>
            <span class="cabecalho__navegacao__Marca">Açougu-<span class="cabecalho__navegacao__Marca__Estilo">E</span></span>
        </nav>
    </header>
    <main class="container">
        <h1 class="container__titulo">Bem-vindo(a), <?php echo $nomeAdm['Nome']; ?>!</h1>
        <ul class="container__lista">
            <a class="container__lista__item" href="gerenciarFuncionario.php">Gerenciar funcionários</a> <br>
            <a class="container__lista__item" href="gerenciarProduto.php">Gerenciar produtos</a><br>
            <a class="container__lista__item" href="vitrine.php">Ir para Vitrine</a><br>
            <a  class="container__lista__sair"href="../control/logout.php">Sair</a><br>
        </ul>
    </main>
    <footer class="footer">
        <div class="footer__centralizar">
            <span class="footer__centralizar__conteudo">+55 11 99999-9999</span>
            <span class="footer__centralizar__conteudo">açougue@gmail.com</span>
            <span class="footer__centralizar__conteudo">©2024 Açougu-e. Todos os direitos reservados.</span>
        </div>
    </footer>
</body>
</html>
