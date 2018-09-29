<html>
<head>
<title>php class</title>
</head>
    <body>
<?php
        $item=array("water"=>400,"cookies"=>800,"orange"=>500,"mango"=>600,"rice"=>700,"car"=>500,"bus"=>700,"pot"=>800,"table"=>800,"lappy"=>900);
        echo $item["lappy"]
            foreach($item as $key =>$price)
            {
                echo $key '-'.$price."<br>"
            }
                    
    ?>
    </body>
</html>