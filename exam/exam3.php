<?php
$cars=["porsche" => 3000, "Benz" => 6000, "Camry" =>5000, "Nissan" => 2000, "Jaguar" => 3500];
$display=asort($cars);

foreach($cars as $key => $index){
    echo "$key is worth N$index\n";
    echo "<br>";
}


?>