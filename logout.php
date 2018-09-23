<?php
    session_start();

    //DESTRÓI AS VARIÁVEIS
    unset($_SESSION[user]);

    //REDIRECIONA PARA A TELA DE LOGIN
    header("Location: index.html");
?>