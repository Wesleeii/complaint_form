<?php
require_once("class2.php");
if(isset($_POST['submit']))
{
    $usernme=$_POST['username'];
    $passwd=$_POST['password'];
    
    
    $sql="INSERT INTO login (username,password) VALUES ('$usernme','$passwd')";
    
    $run = mysqli_query($conn,$sql);
    //var_dump($sql);
   // $count_row = mysqli_num_rows($run);
    
    //echo $count_row;
    if($run){
        echo "query successful";
    }
    else{
        echo "error";
    }
}
?>