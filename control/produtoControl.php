<?php
    include_once "../model/produtoModel.php";
    include_once "../factory/conexao.php";

    class Produto{
        private $nomeProduto;
        private $porcaoUnidade;
        private $precoUnitario;
        private $categoria;
        private $fornecedor;
        private $foto;
        private $id;
        private $produtoModel;

        public function __construct() {
            $conn = new ConexaoBanco();
            $this->produtoModel = new ProdutoModel($conn);
        }

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

        public function setId($id){
            $this->id = $id;
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

        public function getId(){
            return $this->id;
        }

        public function listarTodos(){
            return $this->produtoModel->listarTodos();
        }

        public function listarPorId($id){
            return $this->produtoModel->listarPorId($id);
        }

        public function listarPorCategoria($categoria){
            return $this->produtoModel->listarPorCategoria($categoria);
        }

        public function listarPorNome($nome){
            return $this->produtoModel->listarPorNome($nome);
        }

        public function deletarProduto($id){
            return $this->produtoModel->deletarProduto($id);
        }

        public function inserirProduto($nome, $preco, $porcao, $categoria, $fornecedor, $foto){
            return $this->produtoModel->inserirProduto($nome, $preco, $porcao, $categoria, $fornecedor, $foto);
        }

        public function salvarImagem($foto){
            return $this->produtoModel->salvarImagem($foto);
        }

        public function updateProduto($id, $nome, $preco, $porcao, $categoria, $fornecedor, $foto){
            return $this->produtoModel->updateProduto($id, $nome, $preco, $porcao, $categoria, $fornecedor, $foto);
        }
    }