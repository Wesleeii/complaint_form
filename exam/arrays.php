<?php

//index arrays
// $rays = ["Name","is",2,4,0.54];
$student = ["Gift","Joy","Kayode","Olivia","Henry"];
$num = count($student);
for($i=0; $i<$num; $i++){
echo $student[$i]."\n";


}

// foreach ($rays as $value) {
//     echo $value."\n";
// }
echo $student[0]."\n";

// echo "<hr>";
echo "\n";

//associative arrays
$age = ["Kayode"=>"35","Tobi"=>"25","Gift"=>"12","Olivia"=>"40"];
sort($age);
foreach ($age as $key => $value) {
    echo $key." => ".$value."\n" ;
}
print_r($age);

$temp   = [34,32,56,78,11,36,43,58,90,47,21,50,42];
$avg    = array_sum($temp)/count($temp);

// echo "Your average is ".$avg."\n";

sort($temp);
// print_r($temp);

for($i=0;$i<7;$i++){
    echo "Ascending order ".$temp[$i]."\n";
}
echo "\n\n";

rsort($temp);
for($i=0;$i<7;$i++){
    echo "Descending order ".$temp[$i]."\n";
}


?>