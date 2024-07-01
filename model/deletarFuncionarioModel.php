<?php
    include_once "../control/funcionarioControl.php";

    $conn = new ConexaoBanco;
    $dadosFuncionario = new Funcionario;
    
    $id = $_POST['IdFuncionario'];
    try {
        $dadosFuncionario = new Funcionario();
        $dadosFuncionario->deletarFuncionario($id);
        header("Location: ../view/gerenciarFuncionario.php");
    } catch (Exception $e) {

    }
?>
