<?php
    $host = "localhost";
    $db_user = "root";
    $db_password = "Cecilia2002#";
    $db_name    = "bookshopDb"; 

    $con = mysqli_connect($host,$db_user,$db_password);
    if(!$con){
        die("Could not connect:".mysqli_error());
    }   
        $sql        = "CREATE DATABASE $db_name";
        $exec_query = mysqli_query($con,$sql);
        if($exec_query){
            mysqli_close($con);//close connection in other to select database
            $con = mysqli_connect($host,$db_user,$db_password,$db_name);//Select the database

            echo "Database created sucessfully\n";
            $sql = "CREATE TABLE bookdetails
                    (bookID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                     bookTitle VARCHAR(255) NOT NULL,
                     ISBN VARCHAR(255) NOT NULL,
                     bookCategory VARCHAR(255) NOT NULL,
                     publicationYear VARCHAR(255) NOT NULL
                    )";
            $createTable = mysqli_query($con,$sql);
            if($createTable){
                echo "Table created successfully\n";
            }else{
                echo mysqli_error($con)."\n";
            }
        }else{
            echo "Error creating database\n".mysqli_error($con)."\n";
        }