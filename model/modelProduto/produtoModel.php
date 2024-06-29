<?php 
    include_once "../../factory/conexao.php";

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
            try{
                $inserir->execute();
            }catch(PDOException $e){
                echo "Erro.". $e->getMessage();
                return false;
            }
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

       public function listarPorId($id){
            $query = "SELECT * FROM estoque WHERE ProdutoId=:id";
            $selecaoPorId = $this->conn->prepare($query);
            $selecaoPorId->bindParam(':id',$id,PDO::PARAM_STR);
            $selecaoPorId->execute();
            return $selecaoPorId->fetchAll(PDO::FETCH_ASSOC);
        }

       public function deletarProduto($id){
            $query = "DELETE FROM estoque WHERE ProdutoId=:id";
            $deletar = $this->conn->prepare($query);
            $deletar->bindParam(':id',$id,PDO::PARAM_STR);
            $deletar->execute();
       }

       public function updateProduto($id, $nome, $preco, $porcao, $categoria, $fornecedor, $foto){
        $query = "UPDATE estoque SET NomeProduto=:nome, PrecoUnitario=:preco, PorcaoUnidadeKg=:porcao, CategoriaId=:categoria, FornecedorId=:fornecedor, fotoProduto=:foto WHERE ProdutoId=:id";
        $update = $this->conn->prepare($query);
        $update = $this->conn->prepare($query);
        $update = $this->conn->prepare($query);
        $update->bindParam(':id', $id, PDO::PARAM_INT);
        $update->bindParam(':nome', $nome, PDO::PARAM_STR);
        $update->bindParam(':preco', $preco, PDO::PARAM_STR);
        $update->bindParam(':porcao', $porcao, PDO::PARAM_STR);
        $update->bindParam(':categoria', $categoria, PDO::PARAM_INT);
        $update->bindParam(':fornecedor', $fornecedor, PDO::PARAM_INT);
        $update->bindParam(':foto', $foto, PDO::PARAM_STR);
        $update->execute();
    }
    
    }