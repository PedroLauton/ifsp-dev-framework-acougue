<?php
    include_once "../control/produtoControl.php";

    $dadosProdutos = new Produto;
    
    $dadosProdutos->setId($_POST['ProdutoId']);
    $id = $dadosProdutos->getId();
    
    $dadosProdutos->deletarProduto($id);
    header("Location: ../view/gerenciarProduto.php");
?> 
