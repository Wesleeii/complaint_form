<?php 

/*if(isset($_POST['submit']))
{
    $name=$_POST['Fname'];
    $website=$_POST['web'];
    $phone=$_POST['phone'];
    $comment=$_POST['comment'];
    
    $num=strlen($comment);
    $comm=substr($comment,0, 10);
$result="Welcome to my World My friend:
        $name<br /> Your Phone number is:$phone <br /> Your website consist of the following components: <br> Your comment is: $comment <br /> The number of characters in the comment is: $num <br> The First 10 xharacter of the comment is: $comm";
echo $result;
}
else {
    echo "Fail";
}*/

if(isset($_POST['submit'])){
    
    $name=$_POST['cn'];
    
    switch ($name){
        case 'france':
            echo "Good Job";
            break;
            
        case 2: 
            echo "Try again";
            break;
    }
}

?>