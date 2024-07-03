<?php
    include_once "../control/funcionarioControl.php";

    $dadosFuncionario = new Funcionario;
    $funcionarios = $dadosFuncionario->listarTodos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/gerenciarFuncionarios.css">
    <title>Gerenciar funcionários</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="cabecalho__navegacao">
            <a href="menuAdm.php"><img class="cabecalho__navegacao__logo" src="../img/logo.png" alt="Logo Açougu-E"></a>
            <span class="cabecalho__navegacao__Marca">Açougu-<span class="cabecalho__navegacao__Marca__Estilo">E</span></span>
        </nav>
    </header>
    <main class="container">
        <section class="container__conteudo">
            <h1 class="container__conteudo__titulo">Funcionários</h1>
            <div class="container__conteudo__centralizar">
                <form class="container__conteudo__centralizar__pesquisa" action="listarFuncionarioNome.php" method="POST">
                    <a class="container__conteudo__centralizar__cadastro" href="cadastrarFuncionario.php">Cadastrar</a>
                    <input class="container__conteudo__centralizar__pesquisa__input" type="text" name="cxNomeFunc" placeholder="Buscar">
                    <button class="container__conteudo__centralizar__pesquisa__button"><img class="container__conteudo__centralizar__pesquisa__imagem" src="../img/pesquisar.png" alt="Imagem Lupa"></button>
                </form>
            </div>
            <div class="container__conteudo__auxiliar">
                <?php if (!empty($funcionarios)): ?>
                    <?php foreach($funcionarios as $funcionario): ?>
                        <section class="container__conteudo__funcionarios">
                            <div class="container__conteudo__funcionarios__divisoes">
                                <label class="container__conteudo__funcionarios__divisoes__titulo">Nome:</label>
                                <input class="container__conteudo__funcionarios__divisoes__input" type="text" name="cxNome" value="<?php echo ($funcionario['Nome']); ?>" readonly>
                            </div>
                            <div class="container__conteudo__funcionarios__divisoes">
                                <label class="container__conteudo__funcionarios__divisoes__titulo">Telefone:</label>
                                <input class="container__conteudo__funcionarios__divisoes__input" type="text" name="cxTelefone" value="<?php echo ($funcionario['Telefone']); ?>" readonly>
                            </div>
                            <div class="container__conteudo__funcionarios__divisoes">
                                <label class="container__conteudo__funcionarios__divisoes__titulo">Email:</label>
                                <input class="container__conteudo__funcionarios__divisoes__input" type="text" name="cxEmail" value="<?php echo ($funcionario['Email']); ?>" readonly>
                            </div>
                            <div class="container__conteudo__funcionarios__divisoes">
                                <label class="container__conteudo__funcionarios__divisoes__titulo">Senha:</label>
                                <input class="container__conteudo__funcionarios__divisoes__input" type="text" name="cxSenha" value="<?php echo ($funcionario['Senha']); ?>" readonly>
                            </div>
                            <div class="container__conteudo__funcionarios__divisoes">
                                <label class="container__conteudo__funcionarios__divisoes__titulo">Cargo:</label>
                                <input class="container__conteudo__funcionarios__divisoes__input" type="text" name="cxCargo" value="<?php echo ($funcionario['Cargo']); ?>" readonly>
                            </div>
                            <div class="container__conteudo__funcionarios__divisoes">
                                <label class="container__conteudo__funcionarios__divisoes__titulo">Foto:</label>
                                <?php echo '<img src="../img/'.$funcionario['Foto'].'" alt="Foto do Produto" class="container__conteudo__funcionarios__divisoes__titulo__foto"><br>'?>
                            </div>
                            <div class="container__conteudo__funcionarios__divisoes">
                                <div>
                                    <a href="deletarFuncionario.php?id=<?php echo ($funcionario['Id']); ?>"><img class="container__conteudo__funcionarios__divisoes__imagem" src="../img/excluir.png" alt="Editar"></a>
                                    <a href="editarFuncionario.php?id=<?php echo ($funcionario['Id']);?>"><img class="container__conteudo__funcionarios__divisoes__imagem" src="../img/editar.png" alt="Editar"></a>
                                </div>
                            </div>
                        </section>
                    <?php endforeach; ?> 
                <?php else:?>
                    <p class="container__conteudo__auxiliar__semfuncionario">Nenhum funcionário cadastrado.</p>
                <?php endif;?>
                <button class="container__conteudo__auxiliar__voltar"><a class="container__conteudo__auxiliar__voltar_link" href="menuAdm.php">Voltar</a></button>
            </div> 
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