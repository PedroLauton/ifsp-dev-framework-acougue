<?php
    include_once "../../control/produtoControl.php";
    include_once "../../factory/conexao.php";
    include_once "produtoModel.php";

    $conn = new ConexaoBanco;
    $dadosProduto = new Produto;
    $salvarProduto = new ProdutoModel($conn);

    $dadosProduto->setNomeProduto($_POST['cxNome']);
    $dadosProduto->setPrecoUnitario($_POST['cxPreco']);
    $dadosProduto->setPorcaoUnidade($_POST['cxPorcao']);
    $dadosProduto->setFornecedor($_POST['cxProduto']);
    $dadosProduto->setCategoria($_POST['cxCategoria']);
    $dadosProduto->setFoto($_POST['cxFoto']);

    $nome = $dadosProduto->getNomeProduto();
    $preco = $dadosProduto->getPrecoUnitario();
    $porcao = $dadosProduto->getPorcaoUnidade();
    $fornecedor = $dadosProduto->getFornecedor();
    $categoria = $dadosProduto->getCategoria();
    $foto = $dadosProduto->getFoto();

    try {
        $salvarProduto->inserirProduto($nome, $preco, $porcao, $categoria, $fornecedor, $foto);
        header("Location: ../../view/viewProdutos/gerenciarProduto.php"); 
    } catch (Exception $e) {
        echo "Erro ao realizar a operação: " . $e->getMessage();
    }