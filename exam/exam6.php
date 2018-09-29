<?php
$servername="localhost";
$user="root";
$password="";
$db="ordermanagementsys";

$con=mysqli_connect($servername, $user, $password, $db);
$name = $phone = "";
if(isset($_POST['submit'])){
    $uname=$_POST['name'];
    $phone=$_POST['phone'];
    
    $sql="SELECT * FROM CUSTOMER_tbl WHERE cust_name='$uname' AND cust_phone='$phone'";
    
    $run=mysqli_query($con,$sql);
    //$row_count=mysqli_num_rows(run);
    
    if($run){
        
        $sql_2 = "SELECT * FROM CUSTOMER_tbl WHERE cust_state = 'Calabar'";
        $exec = mysqli_query($con,$sql_2);
        
        $count = mysqli_num_rows($exec);
        
        if($count > 0){
            while($row = mysqli_fetch_assoc($exec)){
                $name   = $row["cust_name"];
                $phone  = $row["cust_phone"];
                
                echo "Name:$name | Phone:$phone<br>";
                
                mysqli_close($con);
            }
        }
        
        
//        header("location:exam3.php");
    }
    else{
     echo "error".mysqli_error();
    }
}

?>

<html>

<head>
    <title>Form</title>
    </head>
    <body>
    <form action="" method="POST">
    <p>Customer name:<input type="text" name="name"/> </p>
    <p>Phone:<input type="text" name="phone"/></p>
    <input type="submit" name="submit" value="submit" />
        </form>
    </body>
</html>