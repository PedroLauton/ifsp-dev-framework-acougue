<?php
    include_once "../../control/produtoControl.php";

    $id = $_POST['ProdutoId'];
    $nome = $_POST['cxNome'];
    $preco = $_POST['cxPreco'];
    $porcao = $_POST['cxPorcao'];
    $categoria = $_POST['cxCategoria'];
    $fornecedor = $_POST['cxFornecedor'];
    $foto = $_FILES['cxFoto']['name'];

    try{
        $dadosProdutos = new Produto;
        $dadosProdutos->updateProduto($id, $nome, $preco, $porcao, $categoria, $fornecedor, $foto);
        header("Location: ../../view/viewProdutos/gerenciarProduto.php"); 
    }catch(Exception $e) {
        echo "Erro ao realizar a operação: " . $e->getMessage();
    }

