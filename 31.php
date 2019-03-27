<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
   
    fscanf(STDIN,"%d\n",$n);

    for($i=1;$i<=$n;$i++){
        $s=trim(fgets(STDIN));
        $k=explode(" ",$s);
        $a=$k[0];
        $b=$k[1];
        $c=$k[2];
        $o=$a/$b;
        echo (int)$o.".";;
        $a=$a%$b;
        $count=0;
        while($count<$c){
            $x=$a*10;
            $a=$x%$b;
            $x=$x/$b;
            echo (int)$x;
            $count++;

        }
        echo "\n";
    }