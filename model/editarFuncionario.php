<?php
    include_once "../control/funcionarioControl.php";

    $id = $_POST['FuncionarioId'];
    $nome = $_POST['cxNome'];
    $email = $_POST['cxEmail'];
    $senha = $_POST['cxSenha'];
    $telefone = $_POST['cxTelefone'];
    $cargo = $_POST['cxCargo'];
    $foto = $_FILES['cxFoto']['name'];

    try{
        $dadosProdutos = new Funcionario;
        $dadosProdutos->updateFuncionario($id, $nome, $telefone, $email, $senha, $cargo, $foto);
        header("Location: ../view/gerenciarFuncionario.php"); 
    }catch(Exception $e) {
        echo "Erro ao realizar a operação: " . $e->getMessage();
    }

