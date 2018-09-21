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
    $rs = mysql_query("SELECT * FROM produtos WHERE 1;");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Listar Produtos</title>
</head>
<body>
    <h1>Manter Dados de Produtos</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Unidade</th>
            <th>Quantidade</th>
            <th>Valor R$</th>
        </tr>
        <?php while ($row=mysql_fetch_array($rs)) {?>
            <tr>
                <td><?php $row['id'] ?></td>
                <td><?php $row['descricao'] ?></td>
                <td><?php $row['unidade'] ?></td>
                <td><?php $row['quantidade'] ?></td>
                <td><?php $row['valor'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>