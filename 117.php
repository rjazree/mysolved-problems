<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$c);
    $count=0;
    for($i=0;$i<$c;$i++){
        fscanf(STDIN,"%d\n",$n);
        $ans=($n*($n+1))/2;
        echo $ans."\n";
    }