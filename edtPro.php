<?php
    require_once('conexao.php');
    // trim() --> retirar espaços do começo e final de palavras se necessário
    $id = trim($_POST['id']);
    $desc = trim($_POST['txtDesc']);
    $uni = trim($_POST['txtUni']);
    $qtd = trim($_POST['txtQtd']);
    $val = trim($_POST['txtVal']);

    if(!empty($desc) && !empty($uni) && !empty($qtd) && !empty($val)){ //verificar as variáveis estão vazias ou não
        $con = open_database();
        selectDb();
        $sql = "UPDATE produtos SET descricao='$desc', unidade='$uni', quantidade='$qtd', valor='$val' WHERE id='$id';";
        $ins = mysql_query($sql);
        close_database($con);

        if($ins==FALSE)
            $msg = "Erro ao atualizar o  produto!";
        else {
            $msg = "Foi alterado " . mysql_affected_rows . "registros <br/>";
            unset($id, $desc, $uni, $qtd, $val); //limpar variáveis para poupar memória
        }
        echo $msg;
    }
    header("location: listarProd.php");
?>