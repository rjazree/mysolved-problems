<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    fscanf(STDIN,"%d",$n);

    for($i=0;$i<$n;$i++){
    $a=fgets(STDIN);
    $s=explode(" ",$a);
    $s = array_map('floatval', explode(' ', $a));
   
    $p=pow(($s[0]-$s[3]),2)+pow(($s[1]-$s[4]),2);
    $d=sqrt($p);
    $d=round($d,2);
    $c=$i+1;
    if($d==$s[2])
    echo "Case ".$c.": OnCircle"."\n";
    
    if($d>$s[2])
    echo "Case ".$c.": Outside"."\n";

    
    if($d<$s[2])
    echo "Case ".$c.": Inside"."\n";
    $c=0;
}





?>



















