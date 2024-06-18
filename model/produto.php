<?php 
    include_once "../factory/conexao.php";

    class Produto{
       private $nomeProduto;
       private $porcaoUnidade;
       private $precoUnitario;
       private $categoria;
       private $fornecedor;
       private $foto;
    //    private $conn;

    //    public function __construct($conexao) {
    //         $this->conn = $conexao->getConn();
    //     }

        public function setNomeProduto($nome){
            $this->nomeProduto = $nome;
        }

        public function setPorcaoUnidade($porcao){
            $this->porcaoUnidade = $porcao;
        }

        public function setPrecoUnitario($preco){
            $this->precoUnitario = $preco;
        }

        public function setFornecedor($fornecedor){
            $this->fornecedor = $fornecedor;
        }
        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }

        public function setFoto($foto){
            $this->foto = $foto;
        }

       public function getNomeProduto(){
            return $this->nomeProduto;
        }

        public function getPorcaoUnidade(){
            return $this->porcaoUnidade;
        }

        public function getFornecedor(){
            return $this->fornecedor;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function getPrecoUnitario(){
            return $this->precoUnitario;
        }

        public function getFoto(){
            return $this->foto;
        }

       public function inserirProduto($nome, $preco, $porcao, $categoria, $fornecedor, $foto, $conn){
            $query = "INSERT INTO estoque(NomeProduto,  PorcaoUnidadeKg, PrecoUnitario, CategoriaId, FornecedorId, fotoProduto) VALUES (:nome, :porcao, :preco, :categoria, :fornecedor, :foto)";
            $inserir = $conn->getConn()->prepare($query);
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

       
    }