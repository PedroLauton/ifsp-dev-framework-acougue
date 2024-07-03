<?php 
    include_once "../factory/conexao.php";

    class ProdutoModel{
        private $conn;

        public function __construct($conexao) {
            $this->conn = $conexao->getConn();
        }

       public function inserirProduto($nome, $preco, $porcao, $categoria, $fornecedor, $foto){
            $query = "INSERT INTO estoque(NomeProduto,  PorcaoUnidadeKg, PrecoUnitario, CategoriaId, FornecedorId, fotoProduto) VALUES (:nome, :porcao, :preco, :categoria, :fornecedor, :foto)";
            $inserir = $this->conn->prepare($query);
            $inserir->bindParam(':nome',$nome,PDO::PARAM_STR);
            $inserir->bindParam(':porcao',$porcao,PDO::PARAM_STR);
            $inserir->bindParam(':preco',$preco,PDO::PARAM_STR);
            $inserir->bindParam(':categoria',$categoria,PDO::PARAM_STR);
            $inserir->bindParam(':fornecedor',$fornecedor,PDO::PARAM_STR);
            $inserir->bindParam(':foto',$foto,PDO::PARAM_STR);
            $inserir->execute();
       }

       public function listarTodos(){
            $query = "SELECT * FROM estoque";
            $selecaoTotal = $this->conn->prepare($query);
            $selecaoTotal->execute();
            return $selecaoTotal->fetchAll(PDO::FETCH_ASSOC);
       }

       public function listarPorNome($nome){
            $query = "SELECT * FROM estoque WHERE NomeProduto=:nome";
            $selecaoPorNome = $this->conn->prepare($query);
            $selecaoPorNome->bindParam(':nome',$nome,PDO::PARAM_STR);
            $selecaoPorNome->execute();
            return $selecaoPorNome->fetchAll(PDO::FETCH_ASSOC);
       }

       public function listarPorCategoria($categoria){
            $query = "SELECT * FROM estoque WHERE CategoriaId=:categoria";
            $selecaoPorCategoria = $this->conn->prepare($query);
            $selecaoPorCategoria->bindParam(':categoria',$categoria,PDO::PARAM_STR);
            $selecaoPorCategoria->execute();
            return $selecaoPorCategoria->fetchAll(PDO::FETCH_ASSOC);
        }

       public function listarPorId($id){
            $query = "SELECT * FROM estoque WHERE ProdutoId=:id";
            $selecaoPorId = $this->conn->prepare($query);
            $selecaoPorId->bindParam(':id',$id,PDO::PARAM_STR);
            $selecaoPorId->execute();
            return $selecaoPorId->fetchAll(PDO::FETCH_ASSOC);
        }

        public function deletarProduto($id) {
            $query = "SELECT fotoProduto FROM estoque WHERE ProdutoId=:id";
            $selecaoPorId = $this->conn->prepare($query);
            $selecaoPorId->bindParam(':id', $id, PDO::PARAM_STR);
            $selecaoPorId->execute();
            $produto = $selecaoPorId->fetch(PDO::FETCH_ASSOC);
    
            if ($produto) {
                $nomeImagem = $produto['fotoProduto'];
    
                $query = "DELETE FROM estoque WHERE ProdutoId=:id";
                $deletar = $this->conn->prepare($query);
                $deletar->bindParam(':id', $id, PDO::PARAM_STR);
                $deletar->execute();
    
                $caminhoImagem = "../img/" . $nomeImagem;
                if (file_exists($caminhoImagem)) {
                    unlink($caminhoImagem);
                }
            }
        }

        public function updateProdutoSemFoto($id, $nome, $preco, $porcao, $categoria, $fornecedor){
            $query = "UPDATE estoque SET NomeProduto=:nome, PrecoUnitario=:preco, PorcaoUnidadeKg=:porcao, CategoriaId=:categoria, FornecedorId=:fornecedor WHERE ProdutoId=:id";
            $update = $this->conn->prepare($query);
            $update = $this->conn->prepare($query);
            $update = $this->conn->prepare($query);
            $update->bindParam(':id', $id, PDO::PARAM_INT);
            $update->bindParam(':nome', $nome, PDO::PARAM_STR);
            $update->bindParam(':preco', $preco, PDO::PARAM_STR);
            $update->bindParam(':porcao', $porcao, PDO::PARAM_STR);
            $update->bindParam(':categoria', $categoria, PDO::PARAM_INT);
            $update->bindParam(':fornecedor', $fornecedor, PDO::PARAM_INT);
            $update->execute();
        }

        public function updateProduto($id, $nome, $preco, $porcao, $categoria, $fornecedor, $foto) {
            $queryFotoAtual = "SELECT fotoProduto FROM estoque WHERE ProdutoId=:id";
            $stmtFotoAtual = $this->conn->prepare($queryFotoAtual);
            $stmtFotoAtual->bindParam(':id', $id, PDO::PARAM_INT);
            $stmtFotoAtual->execute();
            $produto = $stmtFotoAtual->fetch(PDO::FETCH_ASSOC);
            
            $nomeFotoAntiga = $produto['fotoProduto'];
    
            $query = "UPDATE estoque SET NomeProduto=:nome, PrecoUnitario=:preco, PorcaoUnidadeKg=:porcao, CategoriaId=:categoria, FornecedorId=:fornecedor, fotoProduto=:foto WHERE ProdutoId=:id";
            $update = $this->conn->prepare($query);
            $update->bindParam(':id', $id, PDO::PARAM_INT);
            $update->bindParam(':nome', $nome, PDO::PARAM_STR);
            $update->bindParam(':preco', $preco, PDO::PARAM_STR);
            $update->bindParam(':porcao', $porcao, PDO::PARAM_STR);
            $update->bindParam(':categoria', $categoria, PDO::PARAM_INT);
            $update->bindParam(':fornecedor', $fornecedor, PDO::PARAM_INT);
            $update->bindParam(':foto', $foto, PDO::PARAM_STR);
            $update->execute();
    
            if (!empty($foto)) {
                $caminhoFotoAntiga = "../img/" . $nomeFotoAntiga;
                if (file_exists($caminhoFotoAntiga)) {
                    unlink($caminhoFotoAntiga);
                }
            }
        }

        public function validarImagem($foto) {
            if (isset($foto) && $foto['error'] == 0) {
                $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
                $tiposPermitidos = array('jpg', 'jpeg', 'png', 'gif');
    
                if (in_array($extensao, $tiposPermitidos)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    
        public function salvarImagem($foto) {
            if ($this->validarImagem($foto)) {
                $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
                $nomeImagem = uniqid() . '.' . $extensao;
                $caminhoImagem = "../img/" . $nomeImagem;
    
                if (move_uploaded_file($foto['tmp_name'], $caminhoImagem)) {
                    return $nomeImagem;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
?>