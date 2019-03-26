<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$n);
    $c=0;
    $count=0;
    $s=trim(fgets(STDIN));
    $a=explode(" ",$s);
    $l=strlen($a);
    
    for($i=1;$i<=$l;$i++){
        if($a[$i]==0)
        $count++;
        $c=$c+$a[$i];



    }

    