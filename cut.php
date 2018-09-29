<?php 
$number="(423)439-6404";
$let="let&ter";
$string="ttttt";
echo $number;
echo "<br>";
echo substr($number,0,5);
echo "<br>";
$email="joshua@gmail.com";
echo $email ;
echo "<br>";
echo substr($email,0,6);
echo "<br>";
$cout=substr_replace("Peter&Paul", "&amp", 5);
echo $cout;
echo "<br>";
$count=substr_count($string, "t");
echo $count;
?>