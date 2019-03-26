<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN,"%d\n",$d);    
    
    for($j=1;$j<=$d;$j++){
        fscanf(STDIN,"%d\n",$n);
        $c=0;
        $i=1;
        while($c!=$n){
            $c=$c+$i;
            if($c>=$n){
            echo $i."\n";
            break;
            }
            $i++;

        }
    }