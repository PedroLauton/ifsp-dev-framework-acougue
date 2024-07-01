<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar produtos</title>
    <?php
        include_once "../control/produtoControl.php";
        $dadosProdutos = new Produto;
        $produtos = $dadosProdutos->listarTodos();
    ?>
</head>
<body>
    <a href="cadastrarProduto.php">Cadastrar produto</a><br><br>
    <?php foreach($produtos as $produto): ?>
        <td><?php echo ($produto['NomeProduto']); ?></td>
        <td><?php echo ($produto['PorcaoUnidadeKg']); ?></td>
        <td><?php echo ($produto['PrecoUnitario']); ?></td>
        <td><?php echo ($produto['CategoriaId']); ?></td>
        <td><?php echo ($produto['FornecedorId']); ?></td>
        <td><img src="<?php echo ($produto['fotoProduto']); ?>" alt="Foto do Produto" /></td><br>
        <a href="deletarProduto.php?id=<?php echo ($produto['ProdutoId']);?>">Deletar produto</a>
        <a href="editarProduto.php?id=<?php echo ($produto['ProdutoId']);?>">Editar produto</a><br><br>
    <?php endforeach; ?>
    <br>Pesquisa especifica por nome do produto:
    <form action="listarProdutoNome.php" method="POST">
        Nome:
        <input type="text" name="cxNomeProduto">
        <button>Enviar</button>
    </form>
</body>
</html>