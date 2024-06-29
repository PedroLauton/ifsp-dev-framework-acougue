<?php
include_once "../control/dadosLogin.php";
include_once "../control/gerenciadorSessao.php";
include_once "../factory/conexao.php";

GerenciadorSessao::iniciarSessao(); // Inicia a sessão usando a classe GerenciadorSessao

$dados = new DadosLogin;

$dados->setEmail($_POST['cxEmail']);
$dados->setSenha($_POST['cxSenha']);
$dados->setCargo($_POST['cxHierarquia']);

$email = $dados->getEmail();
$senha = $dados->getSenha();
$tabela = ($dados->getCargo() == "adm") ? "administradores" : "funcionarios";
GerenciadorSessao::setarSessao('contribuidor', $tabela);

if ($email != NULL && $senha != NULL && $tabela != NULL) {
    $conn = new ConexaoBanco;
    $query = "SELECT * FROM $tabela WHERE Email=:email AND Senha=:senha";
    $login = $conn->getConn()->prepare($query);
    $login->bindParam(':email', $email, PDO::PARAM_STR);
    $login->bindParam(':senha', $senha, PDO::PARAM_STR);
    $login->execute();

    if ($login->rowCount() > 0) {
        $usuario = $login->fetch(PDO::FETCH_ASSOC);
        $_SESSION['usuario_autenticado'] = true;
        $_SESSION['Id'] = $usuario['Id'];

        if ($tabela == "administradores") {
            $_SESSION['contribuidor'] = "administradores";
            header("Location: ../view/menuAdm.php");
            exit();
        } else {
            $_SESSION['contribuidor'] = "funcionarios";
            header("Location: ../view/menuFuncionario.php");
            exit();
        }
    } else {
        echo "Dados não encontrados";
    }
} else {
    echo "Credenciais inválidas";
}
?>
