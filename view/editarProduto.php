<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Produto</title>
    <?php
        include_once "../control/produtoControl.php";
        $dadosProdutos = new Produto;
        $id = $_GET['id'];
        $produtos = $dadosProdutos->listarPorId($id);
    ?>
</head>
<body>
    <?php if (!empty($produtos)): ?>
        <?php foreach($produtos as $produto): ?>
            <form action="../model/updateProduto.php" method="POST">
                <input type="hidden" name="ProdutoId" value="<?php echo ($produto['ProdutoId']); ?>">
                Nome:
                <input type="text" name="cxNome" value="<?php echo ($produto['NomeProduto']); ?>" required><br><br>
                Preço unitário:
                <input type="number" name="cxPreco" value="<?php echo ($produto['PrecoUnitario']); ?>" required><br><br>
                Porção unitária:
                <input type="number" name="cxPorcao" value="<?php echo ($produto['PorcaoUnidadeKg']); ?>" required><br><br>
                Categoria:
                <select id="categoria" name="cxCategoria" required>
                    <option value="1" <?php echo ($produto['CategoriaId'] == 1) ? 'selected' : ''; ?>>Aves</option>
                    <option value="2" <?php echo ($produto['CategoriaId'] == 2) ? 'selected' : ''; ?>>Carne bovina</option>
                    <option value="3" <?php echo ($produto['CategoriaId'] == 3) ? 'selected' : ''; ?>>Carne suína</option>
                    <option value="4" <?php echo ($produto['CategoriaId'] == 4) ? 'selected' : ''; ?>>Frutos do mar</option>
                    <option value="5" <?php echo ($produto['CategoriaId'] == 5) ? 'selected' : ''; ?>>Queijos</option>
                </select><br><br>
                Fornecedor:
                <select id="fornecedor" name="cxFornecedor" required>
                    <option value="1" <?php echo ($produto['FornecedorId'] == 1) ? 'selected' : ''; ?>>LeiteAutêntico</option>
                    <option value="2" <?php echo ($produto['FornecedorId'] == 2) ? 'selected' : ''; ?>>FazuelleCortes</option>
                    <option value="3" <?php echo ($produto['FornecedorId'] == 3) ? 'selected' : ''; ?>>Fogonoboi</option>
                </select><br><br>
                Foto:
                <input type="file" name="cxFoto"><br><br>
                <input type="hidden" name="fotoAtual" value="<?php echo ($produto['fotoProduto']); ?>">
                <button type="submit">Enviar</button>
            </form>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Produto não encontrado.</p>
        <a href="gerenciarProduto.php">Voltar</a>
    <?php endif; ?>
</body>
</html>
