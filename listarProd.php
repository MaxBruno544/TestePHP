<?php
    session_start();
    if (!isset($_SESSION['user']))
        header("Location: index.html");

    require_once('conexao.php');
    $con = open_database();
    selectDb();
    $rs = mysql_query("SELECT * FROM produtos WHERE 1;");
    close_database($con);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Listar Produtos</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Produtos</h1>
        <br/>
        <input name="bt_ins" id="bt_ins" type="button" class="btn btn-primary" value="Novo" onclick="javascript:location.href='inserir.html'">
        <input name="bt_logout" id="bt_logout" type="button" class="btn btn-danger" value="Logout" onclick="javascript:location.href='logout.php'">
        <br/>
        <br/>
        <div class="table-responsive-md">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Unidade</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Valor R$</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php while ($row=mysql_fetch_array($rs)) {?>
                        <tr>
                            <td scope="row"><?php echo $row['id'] ?></td>
                            <td><?php echo $row['descricao'] ?></td>
                            <td><?php echo $row['unidade'] ?></td>
                            <td><?php echo $row['quantidade'] ?></td>
                            <td><?php echo $row['valor'] ?></td>
                            <td>
                                <button type="button" class="btn btn-info" onclick="javascript: location.href='frmEdtPro.php?id=' + <?php echo $row['id']?>"><i class="far fa-edit"></i></button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" onclick="javascript: location.href='frmRemPro.php?id=' + <?php echo $row['id']?>"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>