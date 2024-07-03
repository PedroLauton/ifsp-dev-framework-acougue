<?php
    include_once "../control/funcionarioControl.php";
    include_once "../factory/conexao.php";
    include_once "funcionarioModel.php";

    $dadosFuncionario = new Funcionario;

    $dadosFuncionario->setId($_POST['FuncionarioId']);
    $dadosFuncionario->setNome($_POST['cxNome']);
    $dadosFuncionario->setEmail($_POST['cxEmail']);
    $dadosFuncionario->setSenha($_POST['cxSenha']);
    $dadosFuncionario->setTelefone($_POST['cxTelefone']);
    $dadosFuncionario->setCargo($_POST['cxCargo']);
    
    $id = $dadosFuncionario->getId();
    $nome = $dadosFuncionario->getNome();
    $email = $dadosFuncionario->getEmail();
    $senha = $dadosFuncionario->getSenha();
    $telefone = $dadosFuncionario->getTelefone();
    $cargo = $dadosFuncionario->getCargo();

    if($foto == null){
        $dadosFuncionario->updateFuncionarioSemFoto($id, $nome, $telefone, $email, $senha, $cargo);
        header("Location: ../view/gerenciarFuncionario.php");
    }

    $foto = $_FILES["cxFoto"];
    $nomeImagem = $dadosFuncionario->salvarImagem($foto);

    if ($nomeImagem) {
        $dadosFuncionario->setFoto($nomeImagem);
    } else {
        echo "<script>alert('Erro ao validar ou salvar a imagem.'); window.history.back();</script>";
        exit;
    }

    
    $foto = $dadosFuncionario->getFoto();

    $dadosFuncionario->updateFuncionario($id, $nome, $telefone, $email, $senha, $cargo, $foto);
    header("Location: ../view/gerenciarFuncionario.php");
?>