<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/deletarFuncionario.css">
    <title>Deletar funcionário</title>
    <?php
        include_once "../control/funcionarioControl.php";
        $dadosFuncionario = new Funcionario;
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $funcionarios = $dadosFuncionario->listarPorId($id);    
    ?>
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
            <h1 class="container__conteudo__titulo">Deletar Funcionário</h1>
            <div class="container__conteudo__centralizar">
                <form class="container__conteudo__centralizar__pesquisa" action="listarFuncionarioNome.php" method="POST">
                    <a class="container__conteudo__centralizar__cadastro" href="cadastrarProduto.php">Cadastrar</a>
                    <input class="container__conteudo__centralizar__pesquisa__input" type="text" name="cxNomeFunc" placeholder="Buscar">
                    <button class="container__conteudo__centralizar__pesquisa__button"><img class="container__conteudo__centralizar__pesquisa__imagem" src="../img/pesquisar.png" alt="Imagem Lupa"></button>
                </form>
            </div>
            <form action="../model/deletarFuncionario.php" method="POST">
                <div class="container__conteudo__auxiliar">
                    <?php if (!empty($funcionarios)): ?>
                        <?php foreach($funcionarios as $funcionario): ?>
                            <section class="container__conteudo__funcionarios">
                                <input type="hidden" name="FuncionarioId" value="<?php echo ($funcionario['Id']); ?>">
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
                                    <select id="cargo" name="cxCargo" disabled>
                                        <option value="1" <?php echo ($funcionario['Cargo'] == 1) ? 'selected' : ''; ?>>Auxiliar</option>
                                        <option value="2" <?php echo ($funcionario['Cargo'] == 2) ? 'selected' : ''; ?>>Gerente</option>
                                        <option value="3" <?php echo ($funcionario['Cargo'] == 3) ? 'selected' : ''; ?>>Chefe</option>
                                        <option value="4" <?php echo ($funcionario['Cargo'] == 4) ? 'selected' : ''; ?>>CEO</option>
                                    </select>
                                </div>
                                <div class="container__conteudo__funcionarios__divisoes">
                                    <label class="container__conteudo__funcionarios__divisoes__titulo">Foto:</label>
                                    <?php echo '<img src="../img/'.$funcionario['Foto'].'" alt="Foto do Produto" class="container__conteudo__funcionarios__divisoes__titulo__foto"><br>'?>
                                </div>
                                <div class="container__conteudo__funcionarios__divisoes">
                                    <div>
                                    <button class="container__conteudo__funcionarios__divisoes__button">Excluir</button>
                                    </div>
                                </div>
                            </section>
                        <?php endforeach; ?> 
                    <?php else:?>
                        <p class="container__conteudo__auxiliar__semproduto">Nenhum funcionário encontrado para exclusão.</p>
                    <?php endif;?>
                    <button class="container__conteudo__auxiliar__voltar"><a class="container__conteudo__auxiliar__voltar_link" href="gerenciarFuncionario.php">Voltar</a></button>
                </div> 
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