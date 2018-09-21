<?php
    $conexao = mysql_connect("localhost", "root", "");
    if(!$conexao){
        echo "Erro ao conectar ao banco MySql...";
        exit;
    }
    $banco = mysql_select_db("lp2017");
    if(!$banco){
        echo "Banco de Dados não foi conectado com sucesso...";
        exit;
    }
    $rs = mysql_query("SELECT * FROM produtos;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>