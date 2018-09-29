<?php
$name = ["chinonso" =>'1', "yinka" => "2", "tunde" => "3", "micheal" =>"4", "ife" =>"5", "jacob" =>"6", "isaih" =>"7", "jesus"=>"8", "joshua"=>"9", "segher"=>"10", "oluchi"=>"11", "joce"=>"12", "tunde"=>"13", "miracle"=>"14", "ceec"=>"15"];
ksort($name);
foreach ($name as $index=>$value){
echo "<br>";
echo $index;    
}
?>