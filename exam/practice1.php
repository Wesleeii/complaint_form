<?php 
$names=fnames("Babcock", "uNiVersiTy", "niGeRIA");
echo $names[0]."".$names[1]."".$names[2]. "<br />";
function fnames($n1, $n2, $n3){
    $n1=strtoupper(ucfirst($n1));
    $n2=ucfirst(strtoupper($n2));
    $n3=strtolower(strtoupper($n3));
    return array($n1, $n2, $n3);
    
}


foreach (range(1,10)as $num){
    echo "5 * $num=".(5* $num). "<br />";
}

?>