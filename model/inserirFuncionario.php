<?php
    include_once "../control/funcionarioControl.php";
    include_once "../factory/conexao.php";
    include_once "funcionarioModel.php";

    $dadosFuncionario = new Funcionario;

    $dadosFuncionario->setNome($_POST['cxNome']);
    $dadosFuncionario->setEmail($_POST['cxEmail']);
    $dadosFuncionario->setSenha($_POST['cxSenha']);
    $dadosFuncionario->setTelefone($_POST['cxTelefone']);
    $dadosFuncionario->setCargo($_POST['cxCargo']);

    $foto = $_FILES["cxFoto"];
    $nomeImagem = $dadosFuncionario->salvarImagem($foto);

    if ($nomeImagem) {
        $dadosFuncionario->setFoto($nomeImagem);
    } else {
        echo "<script>alert('Erro ao validar ou salvar a imagem.'); window.history.back();</script>";
        exit;
    }

    $nome = $dadosFuncionario->getNome();
    $email = $dadosFuncionario->getEmail();
    $senha = $dadosFuncionario->getSenha();
    $telefone = $dadosFuncionario->getTelefone();
    $cargo = $dadosFuncionario->getCargo();
    $foto = $dadosFuncionario->getFoto();

    $dadosFuncionario->inserirFuncionario($nome, $telefone, $email, $senha, $cargo, $foto);
    header("Location: ../view/gerenciarFuncionario.php");
?>