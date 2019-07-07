<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    $b=-1;
    $c=10000000;
    for($i=0;$i<5;$i++){
        $in=trim(fgets(STDIN));
        $p=explode(" ",$in);
        $s=$p[0];
        $a=$p[1];

        if($a>$b){
            $m=$s;
            $b=$a;
        }
        if($a<$c){
            $n=$s;
            $c=$a;
        }
    }

    echo $m." ".$n;
