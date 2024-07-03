<?php
    include_once "../control/produtoControl.php";

    $id = $_POST['ProdutoId'];
    try{
        $dadosProdutos = new Produto;
        $dadosProdutos->deletarProduto($id);
        header("Location: ../view/gerenciarProduto.php");
    }catch(Exception $e) {
        echo "Erro ao realizar a operação: " . $e->getMessage();
    }
   
