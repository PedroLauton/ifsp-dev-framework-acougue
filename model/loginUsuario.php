<?php
    include_once "../control/dadosLogin.php";
    include_once "../factory/conexao.php";

    $dados = new DadosLogin;

    $dados->setEmail($_POST['cxEmail']);
    $dados->setSenha($_POST['cxSenha']);
    $dados->setCargo($_POST['cxHierarquia']);

    $email = $dados->getEmail();
    $senha = $dados->getSenha();

    if($dados->getEmail() != ""){
        if($dados->getCargo() == "adm"){
            $conn = new Caminho;
            $query = "SELECT Email, Senha FROM administradores WHERE Email=:email AND Senha=:senha";
            $login = $conn->getConn()->prepare($query);
            $login->bindParam(':email',$email,PDO::PARAM_STR);
            $login->bindParam(':senha',$senha,PDO::PARAM_STR);
            $login->execute();
            if($login->rowCount()){
                echo "Dados buscados com sucesso!";
            }else{
                echo "Dados não encontrados";
            }
        }else{
            $conn = new Caminho;
            $query = "SELECT Email, Senha FROM funcionarios WHERE Email=:email AND Senha=:senha";
            $login = $conn->getConn()->prepare($query);
            $login->bindParam(':email',$email,PDO::PARAM_STR);
            $login->bindParam(':senha',$senha,PDO::PARAM_STR);
            $login->execute();
            if($login->rowCount()){
                echo "Dados buscados com sucesso!";
            }else{
                echo "Dados não encontrados";
            }
        }
    }else{
        echo "Credenciais inválidas";
    }
?>