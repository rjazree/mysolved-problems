<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    fscanf(STDIN,"%d\n",$t);

    for($j=1;$j<=$t;$j++){

        $s=trim(fgets(STDIN));
        $a=explode(" ",$s);
        
        $r=$a[0];
        $n=$a[1];
            for($i=1;$i<=$n;$i++){
                $r=$r*2;
                if($r>=$n)
                break;
                //echo "day".$i.":".$r."\n";
            }
        echo "Case ".$j.": ".$i."\n";
        

    }