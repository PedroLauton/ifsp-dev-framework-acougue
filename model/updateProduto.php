<?php
include_once "../control/produtoControl.php";

$id = $_POST['ProdutoId'];
$nome = $_POST['cxNome'];
$preco = $_POST['cxPreco'];
$porcao = $_POST['cxPorcao'];
$categoria = $_POST['cxCategoria'];
$fornecedor = $_POST['cxFornecedor'];
$foto = $_FILES['cxFoto']['name'];

try {
    $dadosProdutos = new Produto;

    if ($_FILES['cxFoto']['size'] > 0) {
        $foto = $_FILES['cxFoto'];
        $largura = 1500;
        $altura = 1800;
        $tamanho = 2048000;
        $error = array();

        if (!preg_match("/^image\/(jpg|jpeg|png|gif|bmp)$/", $foto["type"])) {
            $error[] = "Isso não é uma imagem.";
        }

        $dimensoes = getimagesize($foto["tmp_name"]);
        if ($dimensoes[0] > $largura) {
            $error[] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
        if ($dimensoes[1] > $altura) {
            $error[] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
        if ($foto["size"] > $tamanho) {
            $error[] = "A imagem deve ter no máximo ".$tamanho." bytes";
        }

        if (count($error) == 0) {
            $nome_imagem = $foto["name"];
            $caminho_imagem = "../img/" . $nome_imagem;

            if (move_uploaded_file($foto["tmp_name"], $caminho_imagem)) {
                $dadosProdutos->updateProduto($id, $nome, $preco, $porcao, $categoria, $fornecedor, $nome_imagem);
            } else {
                throw new Exception("Erro ao fazer upload da imagem.");
            }
        } else {
            $totalErro = implode("\n", $error);
            throw new Exception($totalErro);
        }
    } else {
        $dadosProdutos->updateProduto($id, $nome, $preco, $porcao, $categoria, $fornecedor);
    }

    header("Location: ../view/gerenciarProduto.php");
} catch (Exception $e) {
    echo "Erro ao realizar a operação: " . $e->getMessage();
}
?>
