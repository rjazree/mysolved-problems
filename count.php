<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
echo "Enter an even number";
$a=array();
$a=trim(fgets(STDIN));
//$a=str_split($s);
$flag=0;
//var_dump($a);
$l=strlen($a);
echo $l;
for($i=0;$i<$l;$i++){
    $p=$a[$i];
    $k=$i+1;
    if($p==$a[$k])
    echo "match";
}
echo $flag;
echo $p;





?>