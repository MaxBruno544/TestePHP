<?php
    require_once('conexao.php');
    // trim() --> retirar espaços do começo e final de palavras se necessário
    $id = trim($_POST['id']);

    if(!empty($id)){ //verificar as variáveis estão vazias ou não
        $con = open_database();
        selectDb();
        $sql = "DELETE FROM produtos WHERE id='$id';";
        $ins = mysql_query($sql);
        close_database($con);

        if($ins==FALSE)
            $msg = "Erro ao remover o  produto!";
        else {
            $msg = "Foi removido " . mysql_affected_rows . "registros <br/>";
            unset($id); //limpar variáveis para poupar memória
        }
        echo $msg;
    }
    header("location: listarProd.php");
?>