<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
   
    fscanf(STDIN,"%d\n",$n);

    for($i=1;$i<=$n;$i++){
        $s=trim(fgets(STDIN));
        $k=explode(" ",$s);
        $k[0]=$k[0]+$k[0];
        $ans=pow($k[0],2)-pow($k[1],2);
        //echo $ans;

        echo "Case ".$i.": ".$ans."\n";

    }