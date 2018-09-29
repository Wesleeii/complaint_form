<?php 
$host="localhost";
$user="root";
$password="";
$db="bookshopDb";

$con=mysqli_connect($host, $user, $password);
if(!$con){
    die("could not connect:".mysqli_error());
}
$sql="CREATE DATABASE $db";
$exec1=mysqli_query($con, $sql);
if($exec1){
    mysqli_close($con);
    
    $con=mysqli_connect($host, $user, $password, $db);
    echo "Database Succesfully created \n";
    $sql= "CREATE TABLE bookdetails(bookID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, bookTitle VARCHAR(255) NOT NULL, ISBN VARCHAR(255) NOT NULL, bookCategory VARCHAR(255) NOT NULL, bookPubYear VARCHAR(255) NOT NULL)";
    
    $createTable=mysqli_query($con,$sql);
    
    if($createTable){
        echo "Table Created Successfully\n";
    }
    else{
        echo mysqli_error($con)."\n";
    }
}else{
            echo "Error creating database\n".mysqli_error($con)."\n";
        }




?>