<?php
    include_once "../control/gerenciadorSessao.php";

    GerenciadorSessao::destruirSessao();

    header("Location: ../view/login.php");
?>
