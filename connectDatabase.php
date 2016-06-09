<?php

    $usuario    = "u988211659_crowd";
    $senha      = "junior2011";
    $servidor   = "mysql.hostinger.com.br";
    $db         = "u988211659_crowd";
    
    //funçao usada para ser exibido caracteres acentuados
    header('Content-Type: text/html; charset=utf-8');
    
    $connect = mysqli_connect($servidor, $usuario, $senha, $db) or die (mysqli_error());

    if(!$connect){
        echo "error database";
    }
    
?>

