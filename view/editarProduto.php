<?php
    include_once "../control/produtoControl.php";

    $dadosProdutos = new Produto;
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $produtos = $dadosProdutos->listarPorId($id);    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/editarProduto.css">
    <title>Editar produto</title>
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
            <h1 class="container__conteudo__titulo">Edição de produtos</h1>
            <div class="container__conteudo__centralizar">
                <form class="container__conteudo__centralizar__pesquisa" action="listarProdutoNome.php" method="POST">
                    <a class="container__conteudo__centralizar__cadastro" href="cadastrarProduto.php">Cadastrar</a>
                    <input class="container__conteudo__centralizar__pesquisa__input" type="text" name="cxNomeProduto" placeholder="Buscar">
                    <button class="container__conteudo__centralizar__pesquisa__button"><img class="container__conteudo__centralizar__pesquisa__imagem" src="../img/pesquisar.png" alt="Imagem Lupa"></button>
                </form>
            </div>
            <form action="../model/editarProduto.php" method="POST" enctype="multipart/form-data">
                <div class="container__conteudo__auxiliar">
                    <?php if (!empty($produtos)): ?>
                        <?php foreach($produtos as $produto): ?>
                            <section class="container__conteudo__funcionarios">
                                <input type="hidden" name="ProdutoId" value="<?php echo ($produto['ProdutoId']); ?>">
                                <div class="container__conteudo__funcionarios__divisoes">
                                    <label class="container__conteudo__funcionarios__divisoes__titulo">Nome:</label>
                                    <input class="container__conteudo__funcionarios__divisoes__input" type="text" name="cxNome" value="<?php echo ($produto['NomeProduto']); ?>" required>
                                </div>
                                <div class="container__conteudo__funcionarios__divisoes">
                                    <label class="container__conteudo__funcionarios__divisoes__titulo">Porção(Kg):</label>
                                    <input class="container__conteudo__funcionarios__divisoes__input" type="text" name="cxPorcao" value="<?php echo ($produto['PorcaoUnidadeKg']); ?>" required>
                                </div>
                                <div class="container__conteudo__funcionarios__divisoes">
                                    <label class="container__conteudo__funcionarios__divisoes__titulo">Preço Unitário:</label>
                                    <input class="container__conteudo__funcionarios__divisoes__input" type="text" name="cxPreco" value="<?php echo ($produto['PrecoUnitario']); ?>" required>
                                </div>
                                <div class="container__conteudo__funcionarios__divisoes">
                                    <label class="container__conteudo__funcionarios__divisoes__titulo">Categoria ID:</label>
                                    <input class="container__conteudo__funcionarios__divisoes__input" type="text" name="cxCategoria" value="<?php echo ($produto['CategoriaId']); ?>" required>
                                </div>
                                <div class="container__conteudo__funcionarios__divisoes">
                                    <label class="container__conteudo__funcionarios__divisoes__titulo">Fornecedor ID:</label>
                                    <input class="container__conteudo__funcionarios__divisoes__input" type="text" name="cxFornecedor" value="<?php echo ($produto['FornecedorId']); ?>" required>
                                </div>
                                <div class="container__conteudo__funcionarios__divisoes">
                                    <label class="container__conteudo__funcionarios__divisoes__titulo">Foto:</label>
                                    <div class="custom-file-input">
                                        <label for="fotoProduto">Escolher arquivo</label>
                                        <input type="file" name="cxFoto" id="fotoProduto" accept="image/*" required />
                                    </div>
                                </div>
                                <div class="container__conteudo__funcionarios__divisoes">
                                    <div>
                                    <button class="container__conteudo__funcionarios__divisoes__button">Salvar</button>
                                    </div>
                                </div>
                            </section>
                        <?php endforeach; ?> 
                    <?php else:?>
                        <p class="container__conteudo__auxiliar__semproduto">Nenhum produto encontrado para edição.</p>
                    <?php endif;?>
                    <button class="container__conteudo__auxiliar__voltar"><a class="container__conteudo__auxiliar__voltar_link" href="gerenciarProduto.php">Voltar</a></button>
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