<?php
    include_once "../control/funcionarioControl.php";

    $dadosFuncionario = new Funcionario;
    
    $dadosFuncionario->setId($_POST['FuncionarioId']);
    $id = $dadosFuncionario->getId();

    $dadosFuncionario->deletarFuncionario($id);
    header("Location: ../view/gerenciarFuncionario.php");
?>


