<?php
    $user = trim($_POST['username']);
    $pswd = trim($_POST['password']);
    $pwdmd5 = md5($pswd);
    //echo $user . " - " . $pswd;
    require_once('conexao.php');
    $con = open_database();
    selectDb();
    $sql = "SELECT * FROM usuarios WHERE usuario LIKE '$user'";
    $rs = mysql_query($sql);
    close_database($con);

    $row = mysql_fetch_array($rs);
    echo $row['usuario'] . " - " . $row['senha'] . "<br>";

    if(md5($pswd) == $row['senha']){
        session_start(); //INICIALIZA A SESSÃO
        //GRAVA AS VARIÁVEIS NA SESSÃO
        $_SESSION['user'] = $user;
        //$_SESSION['pswd'] = $psdw;
        header("Location: listarProd.php"); //REDIRECIONA PARA A PÁGINA PRINCIPAL
    }
    else header("Location: index.html");

?>