<?php
   class FuncionarioUsuarioModel {
        private $conn;

        public function __construct($conexao) {
            $this->conn = $conexao->getConn();
        }

        public function listarFunc($id) {
            $query = "SELECT * FROM funcionarios WHERE Id=:id";
            $selecaoPorId = $this->conn->prepare($query);
            $selecaoPorId->bindParam(':id', $id, PDO::PARAM_INT);
            $selecaoPorId->execute();
            return $selecaoPorId;
        }
    }
?>