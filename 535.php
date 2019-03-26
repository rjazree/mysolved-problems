<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$n);
    
    for($j=0;$j<$n;$j++){
        $c=0;
        $a=trim(fgets(STDIN));    //
        $s= str_split($a);
        //var_dump($s);
        $l=strlen($a);
    // echo $l;
        for($i=0;$i<$l;$i++){
            $c=$c+ord($s[$i]);

        }
        //echo $c;
        if($c%20==0)
        echo "Yes\n";
        else
        echo "No\n";

    }