<?php
require_once("class2.php");
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    
    $sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
    
    $run = mysqli_query($conn,$sql);
    $count_row = mysqli_num_rows($run);

    //echo $count_row;
    if($count_row == 1){
        header("location:index.php");
    }
    else{
        echo "error".mysqli_error();
    }
}
?>