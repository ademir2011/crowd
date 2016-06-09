<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    require './connectDatabase.php';
    createEvento();
    
}

function createEvento(){
    
    global $connect;
    
    $usuario_idusuario = $_POST["usuario_idusuario"];
    $primeiroTitulo = $_POST["primeiroTitulo"];
    $segundoTitulo = $_POST["segundoTitulo"];
    $localdoevento = $_POST["localdoevento"];
    $datadoevento = $_POST["datadoevento"];
    $horadoevento = $_POST["horadoevento"];
    $preco = $_POST["preco"];
    
    $query = "INSERT INTO   evento (usuario_idusuario, primeiroTitulo, segundoTitulo, localdoevento, datadoevento, horadoevento, preco) "
            . "             values ('$usuario_idusuario','$primeiroTitulo','$segundoTitulo','$localdoevento','$datadoevento', '$horadoevento', '$preco');";
    
    mysqli_query($connect, $query) or die (mysqli_error($connect));
    mysqli_close($connect);
    
}

?>