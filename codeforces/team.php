<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$n);
    $c=0;

    for($i=0;$i<$n;$i++){
        $s=trim(fgets(STDIN));
        $k=explode(" ",$s);
        if($k[0]==1 && $k[1]==1 && $k[2]==1)
        $c++;
        if($k[0]==1 && $k[1]==1 && $k[2]==0)
        $c++;
        if($k[0]==0 && $k[1]==1 && $k[2]==1)
        $c++;
        if($k[0]==1 && $k[1]==0 && $k[2]==1)
        $c++;
    }
    echo $c;
        
        