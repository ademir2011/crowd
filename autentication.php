<?php

if($_SERVER['REQUEST_METHOD'] == "GET"){
    
 
    include './connectDatabase.php';
    autentication();
    
}

function autentication(){
    
    global $connect;
    
    $email      = $_GET["email"];
    $senha      = $_GET["senha"];
	
    $query = " Select * FROM usuario WHERE email = '$email' and senha = '$senha'; ";

    $result = mysqli_query($connect, $query);
    $number_of_rows = mysqli_num_rows($result);
    
    $temp_array  = array();

    if($number_of_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $temp_array[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode(array("usuario"=>$temp_array));
    mysqli_close($connect);
    
}

?>

