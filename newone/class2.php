<?php
    $server_name="localhost";
    $username="root";
    $password="";

    $db_name="it_lab";
    
    $conn = mysqli_connect($server_name, $username, $password, $db_name);
    if($conn){
        echo("Succesful Connection");
    }
else{
    echo("Connection Failed");
}
?>