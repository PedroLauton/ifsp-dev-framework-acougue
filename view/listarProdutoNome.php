<?php
    include_once "../control/produtoControl.php";
    include_once "../control/gerenciadorSessao.php";
    
    GerenciadorSessao::verificaLogin();

    $dadosProdutos = new Produto;
    $nome = isset($_POST['cxNomeProduto']) ? $_POST['cxNomeProduto'] : null;
    $produtos = $dadosProdutos->listarPorNome($nome);    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/listarProdutoNome.css">
    <title>Pesquisar produtos</title>
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
            <h1 class="container__conteudo__titulo">Pesquisa por nome</h1>
            <div class="container__conteudo__centralizar">
                <form class="container__conteudo__centralizar__pesquisa" action="listarProdutoNome.php" method="POST">
                    <a class="container__conteudo__centralizar__cadastro" href="cadastrarProduto.php">Cadastrar</a>
                    <input class="container__conteudo__centralizar__pesquisa__input" type="text" name="cxNomeProduto" placeholder="Buscar">
                    <button class="container__conteudo__centralizar__pesquisa__button"><img class="container__conteudo__centralizar__pesquisa__imagem" src="../img/pesquisar.png" alt="Imagem Lupa"></button>
                </form>
            </div>
            <div class="container__conteudo__auxiliar">
                <?php if (!empty($produtos)): ?>
                    <?php foreach($produtos as $produto): ?>
                        <section class="container__conteudo__produtos">
                            <div class="container__conteudo__produtos__divisoes">
                                <label class="container__conteudo__produtos__divisoes__titulo">Nome:</label>
                                <input class="container__conteudo__produtos__divisoes__input" type="text" name="cxProduto" value="<?php echo ($produto['NomeProduto']); ?>" readonly>
                            </div>
                            <div class="container__conteudo__produtos__divisoes">
                                <label class="container__conteudo__produtos__divisoes__titulo">Porção(Kg):</label>
                                <input class="container__conteudo__produtos__divisoes__input" type="text" name="cxPorcao" value="<?php echo ($produto['PorcaoUnidadeKg']); ?>" readonly>
                            </div>
                            <div class="container__conteudo__produtos__divisoes">
                                <label class="container__conteudo__produtos__divisoes__titulo">Preço Unitário:</label>
                                <input class="container__conteudo__produtos__divisoes__input" type="text" name="cxPreco" value="<?php echo ($produto['PrecoUnitario']); ?>" readonly>
                            </div>
                            <div class="container__conteudo__produtos__divisoes">
                                <label class="container__conteudo__produtos__divisoes__titulo">Categoria:</label>
                                <select name="cxCategoria" disabled>
                                    <option value="1" <?php echo ($produto['CategoriaId'] == 1) ? 'selected' : ''; ?>>Aves</option>
                                    <option value="2" <?php echo ($produto['CategoriaId'] == 2) ? 'selected' : ''; ?>>Carne Bovina</option>
                                    <option value="3" <?php echo ($produto['CategoriaId'] == 3) ? 'selected' : ''; ?>>Carne Suína</option>
                                    <option value="4" <?php echo ($produto['CategoriaId'] == 4) ? 'selected' : ''; ?>>Frutos do mar</option>
                                </select>
                            </div>
                            <div class="container__conteudo__produtos__divisoes">
                                <label class="container__conteudo__produtos__divisoes__titulo">Fornecedor:</label>
                                <select name="cxFornecedor" disabled>
                                    <option value="1" <?php echo ($produto['FornecedorId'] == 1) ? 'selected' : ''; ?>>Fogonoboi</option>
                                    <option value="2" <?php echo ($produto['FornecedorId'] == 2) ? 'selected' : ''; ?>>FazuelleCortes</option>
                                </select>
                            </div>
                            <div class="container__conteudo__produtos__divisoes">
                                <label class="container__conteudo__produtos__divisoes__titulo">Foto:</label>
                                <?php echo '<img src="../img/'.$produto['fotoProduto'].'" alt="Foto do Produto" class="container__conteudo__produtos__divisoes__titulo__foto"><br>'?>
                            </div>
                            <div class="container__conteudo__produtos__divisoes">
                                <div>
                                    <a href="deletarProduto.php?id=<?php echo ($produto['ProdutoId']);?>"><img class="container__conteudo__produtos__divisoes__imagem" src="../img/excluir.png" alt="Editar"></a>
                                    <a href="editarProduto.php?id=<?php echo ($produto['ProdutoId']);?>"><img class="container__conteudo__produtos__divisoes__imagem" src="../img/editar.png" alt="Editar"></a>
                                </div>
                            </div>
                        </section>
                    <?php endforeach; ?> 
                <?php else:?>
                    <p class="container__conteudo__auxiliar__semproduto">Nenhum produto encontrado.</p>
                <?php endif;?>
                <button class="container__conteudo__auxiliar__voltar"><a class="container__conteudo__auxiliar__voltar_link" href="gerenciarProduto.php">Voltar</a></button>
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