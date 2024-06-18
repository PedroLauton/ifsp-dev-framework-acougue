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
            session_destroy();
        }
    }
    