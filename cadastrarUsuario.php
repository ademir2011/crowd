<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    require './connectDatabase.php';
    createUsuario();
    
}

function createUsuario(){
    
    global $connect;
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $sexo = $_POST["sexo"];
    $idade = $_POST["idade"];
    
    $query = "INSERT INTO usuario(nome,email,senha,sexo,idade) values ('$nome','$email','$senha','$sexo','$idade');";
    
    mysqli_query($connect, $query) or die (mysqli_error($connect));
    mysqli_close($connect);
    
}

?>
