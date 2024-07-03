<?php
    include_once "../factory/conexao.php";
    include_once "gerenciadorSessao.php";

    class DadosLogin{
       private $email;
       private $senha;
       private $cargo;
       private $conn;

       public function __construct() {
            $this->conn = new ConexaoBanco();
        }

       public function setEmail($email){
            $this->email = $email;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function setCargo($cargo){
            $this->cargo = $cargo;
        }

       public function getEmail(){
            return $this->email;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function getCargo(){
            return $this->cargo;
        }

        public function verificarLogin($email, $senha, $tabela){
            $query = "SELECT * FROM $tabela WHERE Email=:email AND Senha=:senha";
            $login = $this->conn->getConn()->prepare($query);
            $login->bindParam(':email', $email, PDO::PARAM_STR);
            $login->bindParam(':senha', $senha, PDO::PARAM_STR);
            $login->execute();
            return $this->extrairDadosLogin($login);
        }

        private function extrairDadosLogin($login){
            if ($login->rowCount() > 0) {
                $usuario = $login->fetch(PDO::FETCH_ASSOC);
                GerenciadorSessao::setarSessao('Id', $usuario['Id']);
                return $this->redirecionarLogin();
            }else{
                return "../view/login.php";
            }
        }

        private function redirecionarLogin(){
            if(GerenciadorSessao::obterSessao('contribuidor') == 'administradores'){
                return "../view/menuAdm.php";
            }
            if(GerenciadorSessao::obterSessao('contribuidor') == 'funcionarios'){
                return  "../view/menuFuncionario.php";
            }
        }
    }
?>