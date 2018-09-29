<html>
<head>
<title>php class</title>
</head>
    <body>
<?php
        $car=array("volvo"=>400,"benz"=>800,"toyota"=>500,"honda"=>600,"bmw"=>700,"nissan"=>500,"posche"=>700,"tesler"=>800,"ford"=>800,"mazda"=>900);
        echo $car["honda"]
            foreach($car as $key =>$value)
            {
                echo $key '-'.$value."<br>"
            }
       /* echo $car[3];
        echo count($car);
        for($i=0; $i<2; $i++)
        {
            echo $car[$i]."<br>";
        }*/
            
    ?>
    </body>
</html>