<?php
    require_once('conexao.php');
    // trim() --> retirar espaços do começo e final de palavras se necessário
    $desc = trim($_POST['txtDesc']);
    $uni = trim($_POST['txtUni']);
    $qtd = trim($_POST['txtQtd']);
    $val = trim($_POST['txtVal']);
    if(!empty($desc) && !empty($uni) && !empty($qtd) && !empty($val)){ //verificar as variáveis estão vazias ou não
        $con = open_database();
        selectDb();
        $sql = "INSERT INTO produtos (descricao, unidade, quantidade, valor) VALUES ('$desc', '$uni', '$qtd', '$val');";
        $ins = mysql_query($sql);
        close_database($con);

        if($ins==FALSE)
            $msg = "Erro ao inserir produtos!";
        else {
            $msg = "Foi inserido " . mysql_affected_rows . "registros <br/>";
            unset($desc, $uni, $qtd, $val); //limpar variáveis para poupar memória
        }
        echo $msg;
    }
    header("location: listarProd.php");
?>