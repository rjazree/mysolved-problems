<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    
fscanf(STDIN,"%d\n",$t);

    for($i=1;$i<=$t;$i++){
        fscanf(STDIN,"%d\n",$n);
            if($n%2==0){
                $a=(string)((3*$n)-2);
                $b=(string)((3*$n)-1);
                $c=(string)((3*$n));
                echo "Case #".$i.": ".$c." ".$b." ".$a."\n";
            }
            else{
                $a=(string)((3*$n)-2);
                $b=(string)((3*$n)-1);
                $c=(string)((3*$n));
                echo "Case #".$i.": ".$a." ".$b." ".$c."\n";
        


            }

        }