
<html>
<head>
    <title>Shopping</title>
    </head>
    
    <body>
    <h1>My Shopping List</h1>
    <?php
        $list=array("Bread", "Butter", "Ham", "Drinks", "Chips");
        echo "<ul>";
        foreach($list as $key){
            echo "<li>$key</li>" ;
        }
        echo "</ul>";
        $num=count($list);
        echo $num;
        
        
        $lang=array(0=>"Perl", 1=>"PHP", 2=>"Pyython");
        
        $search="PHP";
        $limit= count($lang);
        
        for ($i=0; $i < $limit; $i++)
        {
            
            echo "<br> Testing for match with $lang[$i]";
            
            if ($search == $lang[$i]){
                
                echo "<br> $search is an approved lang";
            }
        }
    ?>
        
        
    </body>
</html>