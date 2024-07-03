<?php
    include_once "../factory/conexao.php";
    include_once "../model/funcionarioUsuarioModel.php";
    
    class Funcionario {
        private $funcModel;
    
        public function __construct() {
            $conn = new ConexaoBanco();
            $this->funcModel = new FuncionarioUsuarioModel($conn);
        }
    
        public function listarFunc($id) {
            return $this->funcModel->listarFunc($id);
        }
    }
?>