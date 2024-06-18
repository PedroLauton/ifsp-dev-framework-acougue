<?php
    include_once "../control/dadosLogin.php";
    include_once "../control/gerenciadorSessao.php";
    include_once "../factory/conexao.php";
    include_once "produto.php";

    $conn = new ConexaoBanco;
    $gerenciarProduto = new Produto;

    $gerenciarProduto->setNomeProduto($_POST['cxNome']);
    $gerenciarProduto->setPrecoUnitario($_POST['cxPreco']);
    $gerenciarProduto->setPorcaoUnidade($_POST['cxPorcao']);
    $gerenciarProduto->setFornecedor($_POST['cxProduto']);
    $gerenciarProduto->setCategoria($_POST['cxCategoria']);
    $gerenciarProduto->setFoto($_POST['cxFoto']);

    $nome = $gerenciarProduto->getNomeProduto();
    $preco = $gerenciarProduto->getPrecoUnitario();
    $porcao = $gerenciarProduto->getPorcaoUnidade();
    $fornecedor = $gerenciarProduto->getFornecedor();
    $categoria = $gerenciarProduto->getCategoria();
    $foto = $gerenciarProduto->getFoto();

    try {
        $gerenciarProduto->inserirProduto($nome, $preco, $porcao, $categoria, $fornecedor, $foto, $conn);
        echo "Operação realizada com sucesso.";
    } catch (Exception $e) {
        echo "Erro ao realizar a operação: " . $e->getMessage();
    }