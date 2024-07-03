<?php
    include_once "../model/funcionarioModel.php";
    include_once "../factory/conexao.php";

    class Funcionario {
        private $nome;
        private $telefone;
        private $email;
        private $senha;
        private $cargo;
        private $foto;
        private $id;
        private $funcionarioModel;

        public function __construct() {
            $conn = new ConexaoBanco();
            $this->funcionarioModel = new FuncionarioModel($conn);
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
        }

        public function setCargo($cargo) {
            $this->cargo = $cargo;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setFoto($foto) {
            $this->foto = $foto;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function getCargo() {
            return $this->cargo;
        }

        public function getId() {
            return $this->id;
        }

        public function getFoto() {
            return $this->foto;
        }

        public function listarTodos() {
            return $this->funcionarioModel->listarTodos();
        }

        public function listarPorId($id) {
            return $this->funcionarioModel->listarPorId($id);
        }

        public function listarPorNome($nome) {
            return $this->funcionarioModel->listarPorNome($nome);
        }

        public function salvarImagem($foto) {
            return $this->funcionarioModel->salvarImagem($foto);
        }

        public function inserirFuncionario($nome, $telefone, $email, $senha, $cargo, $foto) {
            return $this->funcionarioModel->inserirFuncionario($nome, $telefone, $email, $senha, $cargo, $foto);
        }

        public function deletarFuncionario($id) {
            return $this->funcionarioModel->deletarFuncionario($id);
        }

        public function updateFuncionario($id, $nome, $telefone, $email, $senha, $cargo, $foto) {
            return $this->funcionarioModel->updateFuncionario($id, $nome, $telefone, $email, $senha, $cargo, $foto);
        }

        public function updateFuncionarioSemFoto($id, $nome, $telefone, $email, $senha, $cargo) {
            return $this->funcionarioModel->updateFuncionarioSemFoto($id, $nome, $telefone, $email, $senha, $cargo);
        }
    }
?>
