<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
   
    fscanf(STDIN,"%d\n",$n);
    $f1=1;
    $f2=1;
    if($n==1)
        echo "1";
    else if($n==2)
    
        echo "2";

    else{
        $ans=2;
        for($i=1;$i<=$n-2;$i++){

        $a=$f1+$f2;
        //echo "a : " .$a;
        $ans=$ans+$a;
        //echo "\nans : ".$ans."\n";
        $f1=$f2;
        $f2=$a;
            
        }
        echo $ans;

    }