<?php
function open_database() {
    $conexao = mysql_connect("localhost", "root", "");
    if(!$conexao){
        echo "Erro ao conectar ao banco MySQL...";
        exit;
    }
    return $conexao;
}

function close_database($conexao) {
    if(!$conexao){
        echo "Erro ao fechar o banco MySQL...";
    }
    mysql_close($conexao);
}

function selectDb(){
    $banco = mysql_select_db("lp2017");
    if(!$banco){
        echo "Banco de Dados não foi conectado com sucesso...";
        exit;
    }
}
?>