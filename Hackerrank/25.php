<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$a);
    
    for($j=1;$j<=$a;$j++){
        $n=trim(fgets(STDIN));
        $f=0;
        for($i=2;$i<=sqrt($n);$i++){
            if($n%$i==0)
            $f++;

        }
        if($f!=0 || $n=='1')
        echo "Not prime\n";
        else
        echo "Prime\n";
    }