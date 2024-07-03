<?php
    include_once "../control/gerenciadorSessao.php";
    
    GerenciadorSessao::verificaLoginAdm();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/cadastroFuncionario.css">k
    <title>Cadastrar funcionário</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="cabecalho__navegacao">
            <a href="vitrine.php"><img class="cabecalho__navegacao__logo" src="../img/logo.png" alt="Logo Açougu-E"></a>
            <span class="cabecalho__navegacao__Marca">Açougu-<span class="cabecalho__navegacao__Marca__Estilo">E</span></span>
        </nav>
    </header>
    <main class="container">
        <section class="container__conteudo">
            <h1 class="container__conteudo__titulo">Cadastro de funcionário</h1>
            <form class="container__conteudo__cadastro" action="../model/inserirFuncionario.php" method="POST" enctype="multipart/form-data">
                <span class="container__conteudo__cadastro__titulo">Nome:</span>
                <input class="container__conteudo__cadastro__input" type="text" name="cxNome" required>
                <span class="container__conteudo__cadastro__titulo">Telefone:</span>
                <input class="container__conteudo__cadastro__input" type="number" name="cxTelefone" required>
                <span class="container__conteudo__cadastro__titulo">Email:</span>
                <input class="container__conteudo__cadastro__input" type="email" name="cxEmail" required>
                <span class="container__conteudo__cadastro__titulo">Senha:</span>
                <input class="container__conteudo__cadastro__input" type="password" name="cxSenha" required>
                <span class="container__conteudo__cadastro__titulo">Cargo:</span>
                    <select class="container__conteudo__cadastro__input" id="categoria" name="cxCargo">
                        <option value="1">Auxiliar</option>
                        <option value="2">Gerente</option>
                        <option value="3">Chefe</option>
                        <option value="4">CEO</option>
                    </select>
                <span class="container__conteudo__cadastro__titulo foto">Foto:</span>
                <input class="container__conteudo__cadastro__input__file" type="file" name="cxFoto" accept="image/*" required>
                <button class="container__conteudo__cadastro__button">Enviar</button>
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
