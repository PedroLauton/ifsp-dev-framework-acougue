<?php
include_once "../control/gerenciadorSessao.php";

GerenciadorSessao::iniciarSessao();
GerenciadorSessao::destruirSessao();

header("Location: ../view/login.php");
exit();
?>
