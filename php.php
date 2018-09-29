<html>
<head>
<title>php class</title>
</head>
    <body>
<?php
        $car=array("volvo","benz","toyota","honda","bmw","nissan","posche","tesler","ford","mazda");
      //echo $car[3];
        //echo count($car);
        $num=count($car);
        for($i=0; $i<$num; $i++)
        {
            echo $car[$i]."<br>";
        }
            
        /*for($i=0; $i<2; $i++)
        {
            echo $car[$i]."<br>";
        }*/
            
    ?>
    </body>
</html>