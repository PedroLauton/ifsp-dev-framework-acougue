<?php
    class VerificarSessao {
        const USUARIO_AUTENTICADO = 'usuario_autenticado';
        const CONTRIBUIDOR = 'contribuidor';
        const ADMINISTRADORES = 'administradores';
        const FUNCIONARIOS = 'funcionarios';

        public static function verificarAcesso($tipoUsuarioPermitido) {
            if (!isset($_SESSION[self::USUARIO_AUTENTICADO]) || $_SESSION[self::USUARIO_AUTENTICADO] !== true) {
                self::redirecionarParaLogin();
            }

            if ($_SESSION[self::CONTRIBUIDOR] !== $tipoUsuarioPermitido) {
                self::redirecionarParaErro();
            }
        }

        public static function verificarSeAdministrador() {
            if (isset($_SESSION[self::CONTRIBUIDOR]) && $_SESSION[self::CONTRIBUIDOR] === self::ADMINISTRADORES) {
                return true; // Usuário é administrador
            } else {
                return false; // Usuário não é administrador
            }
        }

        public static function redirecionarUsuarioAutenticado() {
            if (isset($_SESSION[self::USUARIO_AUTENTICADO]) && $_SESSION[self::USUARIO_AUTENTICADO] === true) {
                switch ($_SESSION[self::CONTRIBUIDOR]) {
                    case self::ADMINISTRADORES:
                        header("Location: menuAdm.php");
                        break;
                    case self::FUNCIONARIOS:
                        header("Location: menuFuncionario.php");
                        break;
                    default:
                        self::redirecionarParaErro();
                }
                exit();
            }
        }

        private static function redirecionarParaLogin() {
            header("Location: login.php");
            exit();
        }

        private static function redirecionarParaErro() {
            header("Location: ../view/paginaErro.php");
            exit();
        }
    }
/*
Essa classe é responsável por verificar se o usuário autenticado tem permissão para acessar determinada página.
Ela possui quatro constantes que representam os tipos de usuários permitidos: USUARIO_AUTENTICADO, CONTRIBUIDOR, ADMINISTRADORES e FUNCIONARIOS.
USUARIO_AUTENTICADO serve para verificar se o usuário está autenticado.
O método verificarAcesso recebe como parâmetro o tipo de usuário permitido e verifica se o usuário autenticado tem permissão para acessar a página.
Se o usuário não estiver autenticado, ele é redirecionado para a página de login.
Se o usuário autenticado não tiver permissão para acessar a página, ele é redirecionado para a página de erro.
O método redirecionarUsuarioAutenticado verifica se o usuário autenticado já está logado e redireciona para a página correspondente ao tipo de usuário.

*/
?>
