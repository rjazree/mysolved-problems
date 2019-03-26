<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$n);
    for($j=0;$j<$n;$j++){
        $i=$j+1;
        $s=trim(fgets(STDIN));
        $a=explode(" ",$s);
        $ans=2*$a[0]+3*$a[1];
        echo "Case ".$i.": ".$ans."\n";
    $i=0;
    }