<?php
    include_once "../control/dadosLogin.php";
    include_once "../control/gerenciadorSessao.php";
    include_once "../factory/conexao.php";

    GerenciadorSessao::iniciarSessao();

    $dados = new DadosLogin;

    $dados->setEmail($_POST['cxEmail']);
    $dados->setSenha($_POST['cxSenha']);
    $dados->setCargo($_POST['cxHierarquia']);

    $email = $dados->getEmail();
    $senha = $dados->getSenha();
    $tabela = ($dados->getCargo() == "adm") ? "administradores" : "funcionarios";
    GerenciadorSessao::setarSessao('contribuidor', $tabela);

    $redirecionamento = $dados->verificarLogin($email, $senha, $tabela);
    header("Location:".$redirecionamento);
?>
