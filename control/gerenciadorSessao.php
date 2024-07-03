<?php
    class GerenciadorSessao {

        public static function iniciarSessao() {
            session_start();
        }
    
        public static function setarSessao($chave, $valor) {
            $_SESSION[$chave] = $valor;
        }
    
        public static function obterSessao($chave) {
            return $_SESSION[$chave] ?? null;
        }

        public static function destruirSessao(){
            session_unset();
            session_destroy();
        }

        public static function verificaLogin() {
            self::iniciarSessao();
            if (self::verificarId() == false) {
                header("Location: ../view/paginaErro.php");
                exit(); 
            }
        }

        public static function verificaLoginAdm() {
            self::iniciarSessao();
            if (self::verificarId()) {
                self::redirecionarAdm();
            } else {
                header("Location: ../view/paginaErro.php");
                exit(); 
            }
        }

        public static function redirecionarAdm() {
            if (self::obterSessao('contribuidor') !== 'administradores') {
                header("Location: ../view/paginaErro.php");
                exit();
            }
        }

        public static function verificaLoginFunc() {
            self::iniciarSessao();
            if (self::verificarId()) {
                self::redirecionarFunc();
            } else {
                header("Location: ../view/paginaErro.php");
                exit(); 
            }
        }
        
        public static function redirecionarFunc() {
            if (self::obterSessao('contribuidor') !== 'funcionarios') {
                header("Location: ../view/paginaErro.php");
                exit();
            }
        }
    
        private static function verificarId() {
            if(self::obterSessao('Id') !== null){
                return true;
            }else{
                return false;
            };
        }

        public static function verificarLogado() {
            self::iniciarSessao();
            if (self::verificarId()) {
                self::redirecionarLogado();
            } 
        }

        public static function redirecionarLogado() {
            if (self::obterSessao('contribuidor') == 'administradores') {
                header("Location: ../view/menuAdm.php");
                exit();
            }else{
                header("Location: ../view/menuFuncionario.php");
                exit();
            }
        }
    }
?>
    