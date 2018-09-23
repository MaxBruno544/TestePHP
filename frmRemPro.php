<?php
    require_once('conexao.php');//inclui o arquivo 'conexao.php'

    $id = trim($_REQUEST['id']); //$_REQUEST[] --> busca valor na barra de endereço do navegador
    
    $con = open_database(); //abrir banco
    selectDb(); //seleciona banco
    $rs = mysql_query("SELECT * FROM produtos WHERE id=".$id);
    close_database($con); //fecha banco

    $row = mysql_fetch_array($rs); //recuperar linha de dados do banco SQL
    $desc = $row['descricao'];
    $uni = $row['unidade'];
    $qtd = $row['quantidade'];
    $val = $row['valor'];
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
    <link rel="stylesheet" href="css/style.css">
    <title>Remover Produtos</title>
</head>
<body>
    <div class="container">
        <h1>Remoção de Produto</h1>   
        <form id="frmRemPro" name="frmRemPro" action="remPro.php" method="post">
            <div class="form-group">
                <label for="lblId">
                    <span class="textoBold">ID:</span>
                    <span class="textoNormal"><?php echo $id?> </span>
                </label>
                <input type="hidden" name="id" value="<?php echo $id?>"/>
            </div>
            <div class="form-group">
                <label for="lblDesc">
                    <span class="textoBold">Descrição:</span>
                    <span class="textoNormal"><?php echo $desc?></span>
                </label>
            </div>
            <div class="form-group">
                <label for="lblUni">
                    <span class="textoBold">Unidade:</span>
                    <span class="textoNormal"><?php echo $uni?></span>
                </label>
            </div>
            <div class="form-group">
                <label for="lblQtd">
                    <span class="textoBold">Quantidade:</span>
                    <span class="textoNormal"><?php echo $qtd?></span>
                </label>
            </div>
            <div class="form-group">
                <label for="lblVal">
                    <span class="textoBold">Valor:</span>
                    <span class="textoNormal">R$ <?php echo $val?></span>
                </label>
            </div>
            <input name="bt_rem" id="bt_rem" type="submit" class="btn btn-success" value="Remover">
            <input name="bt_limpar" id="bt_voltar" type="button" class="btn btn-danger" value="Voltar" onclick="javascript:location.href='listarProd.php'">
        </form>
    </div>
</body>
</html>