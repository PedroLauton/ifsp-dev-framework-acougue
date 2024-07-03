<?php
   class AdministradorModel {
        private $conn;

        public function __construct($conexao) {
            $this->conn = $conexao->getConn();
        }

        public function listarAdm($id) {
            $query = "SELECT * FROM administradores WHERE Id=:id";
            $selecaoPorId = $this->conn->prepare($query);
            $selecaoPorId->bindParam(':id', $id, PDO::PARAM_INT);
            $selecaoPorId->execute();
            return $selecaoPorId;
        }
    }
?>