<?php
    include_once "../control/funcionarioControl.php";
    include_once "../factory/conexao.php";
    include_once "funcionarioModel.php";

    $conn = new ConexaoBanco;
    $dadosFuncionario = new Funcionario;
    $salvarFuncionario = new FuncionarioModel($conn);

    $dadosFuncionario->setNome($_POST['cxNome']);
    $dadosFuncionario->setEmail($_POST['cxEmail']);
    $dadosFuncionario->setSenha($_POST['cxSenha']);
    $dadosFuncionario->setTelefone($_POST['cxTelefone']);
    $dadosFuncionario->setCargo($_POST['cxCargo']);
    $dadosFuncionario->setFoto($_POST['cxFoto']);

    $nome = $dadosFuncionario->getNome();
    $email = $dadosFuncionario->getEmail();
    $senha = $dadosFuncionario->getSenha();
    $telefone = $dadosFuncionario->getTelefone();
    $cargo = $dadosFuncionario->getCargo();
    $foto = $dadosFuncionario->getFoto();

    try {
        $salvarFuncionario->inserirFuncionario($nome, $telefone, $email, $senha, $cargo, $foto);
        header("Location: ../view/gerenciarFuncionario.php"); 
    } catch (Exception $e) {
        echo "Erro ao realizar a operação: " . $e->getMessage();
    }