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
    $id = trim($_REQUEST['id']); //$_REQUEST[] --> busca valor na barra de endereço do navegador
    $rs = mysql_query("SELECT * FROM produtos WHERE id=".$id);
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

    <title>Alterar Produtos</title>
</head>
<body>
    <div class="container">
        <h1>Alteração de Dados de Produtos</h1>    
        <form id="frmEdPro" action="edtPro.php" method="post">
            <div class="form-group">
                <label for="lblIdt">ID: <?php echo $id?></label>
                <input type="hidden" name="id" value="<?php echo $id?>">
            </div>
            <div class="form-group">
                <label for="lblDesc">Descrição</label>
                <input type="text" class="form-control" name="txtDesc" id="txtDesc" value="<?php echo $desc?>" placeholder="Nome do Produto">
            </div>
            <div class="form-group">
                <label for="lblUni">Unidade</label>
                <input type="text" class="form-control" name="txtUni" id="txtUni" value="<?php echo $uni?>" placeholder="Informe a unidade (pct, kg, g)">
            </div>
            <div class="form-group">
                <label for="lblQtd">Quantidade</label>
                <input type="text" class="form-control" name="txtQtd" id="txtQtd" value="<?php echo $qtd?>" placeholder="Informe um valor real">
            </div>
            <div class="form-group">
                <label for="lblVal">Valor</label>
                <input type="text" class="form-control" name="txtVal" id="txtVal" value="<?php echo $val?>" placeholder="Informe um número real">
            </div>
            <input name="bt_cad" id="bt_cad" type="submit" class="btn btn-success" value="Gravar">
            <input name="bt_limpar" id="bt_voltar" type="button" class="btn btn-danger" value="Voltar" onclick="javascript:location.href='listarProd.php'">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>