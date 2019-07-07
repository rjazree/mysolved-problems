<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    fscanf(STDIN,"%d\n",$t);

        //for($k=1;$k<=$t;$k++){
            $sum=0;

            $in=trim(fgets(STDIN));
            $a=explode(" ",$in);
            for($i=0;$i<count($a);$i++){
                $sum=$sum+$a[$i];



            }

            echo $sum;