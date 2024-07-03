<?php
    include_once "../control/produtoControl.php";
    include_once "../factory/conexao.php";
    include_once "produtoModel.php";

    $dadosProduto = new Produto;

    $dadosProduto->setId($_POST['ProdutoId']);
    $dadosProduto->setNomeProduto($_POST['cxNome']);
    $dadosProduto->setPrecoUnitario($_POST['cxPreco']);
    $dadosProduto->setPorcaoUnidade($_POST['cxPorcao']);
    $dadosProduto->setFornecedor($_POST['cxFornecedor']);
    $dadosProduto->setCategoria($_POST['cxCategoria']);

    $foto = $_FILES["cxFoto"];
    $nomeImagem = $dadosProduto->salvarImagem($foto);

    if ($nomeImagem) {
        $dadosProduto->setFoto($nomeImagem);
    } else {
        echo "<script>alert('Erro ao validar ou salvar a imagem.'); window.history.back();</script>";
        exit;
    }

    $id = $dadosProduto->getId();
    $nome = $dadosProduto->getNomeProduto();
    $preco = $dadosProduto->getPrecoUnitario();
    $porcao = $dadosProduto->getPorcaoUnidade();
    $categoria = $dadosProduto->getCategoria();
    $fornecedor = $dadosProduto->getFornecedor();
    $foto = $dadosProduto->getFoto();

    $dadosProduto->updateProduto($id, $nome, $preco, $porcao, $categoria, $fornecedor, $foto);
    header("Location: ../view/gerenciarProduto.php");
?>
