<?php
    include_once "../factory/conexao.php";
    include_once "../model/admUsuarioModel.php";
    
    class Administrador {
        private $admModel;
    
        public function __construct() {
            $conn = new ConexaoBanco();
            $this->admModel = new AdministradorModel($conn);
        }
    
        public function listarAdm($id) {
            return $this->admModel->listarAdm($id);
        }
    }
?>