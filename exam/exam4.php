<?php 
if(isset($_POST['submit'])){
    $f_name=$_POST['first_name'];
    $l_name=$_POST['last_name'];
    $quan=$_POST['quantity'];
    
    $total_cost=$quan*120;
    
    $display="$l_name $f_name has bought $quan and a total of $total_cost";
    
    echo $display;
}
?>

<html>
    <head>
    <title>Supermarket</title>
    </head>
    
    <body>
    <h1>BU Supermarket</h1>
        <form action="" method="POST">
        Firstname:<input type="text" name="first_name"/>
        Lastname:<input type="text" name="last_name" />
        Quantity Of Loaves:<input type="text" name="quantity" />
        <input type="submit" name="submit" value="submit">
        </form>
        <p><a href="secondpage.php">Click here</a></p>
    </body>
</html>