<?php
    class DadosLogin{
       private $email;
       private $senha;
       private $cargo;

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
    }
?>