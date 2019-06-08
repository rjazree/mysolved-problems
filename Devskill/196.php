<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$c);
    for($i=0;$i<$c;$i++){
    $a=fgets(STDIN);
    $s = array_map('floatval', explode(' ', $a));
    $ans=($s[0]/$s[1])*-1;
    $ans=number_format((float)$ans, 2, '.', '');
    //$ans=round($ans, 2); 
    echo $ans."\n";
    }

?>