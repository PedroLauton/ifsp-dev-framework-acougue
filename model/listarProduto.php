<?php 
    include_once "../control/produtoControl.php";
    include_once "../factory/conexao.php";
    include_once "produtoModel.php";

    $conn = new ConexaoBanco;
    $nomeProduto = new Produto;
    $pesquisarProduto = new ProdutoModel($conn);

    $nomeProduto->setNomeProduto($_POST['cxNomeProduto']);
    $nome = $nomeProduto->getNomeProduto();

    try {
        $salvarProduto->listarPorNome($nome);
        
    } catch (Exception $e) {
        echo "Erro ao realizar a operação: " . $e->getMessage();
    }