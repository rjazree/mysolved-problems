<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
$sum1=0;
$sum2=0;
fscanf(STDIN,"%d\n",$case);
for($j=0;$j<$case;$j++){
    $sum1=0;
    $sum2=0;
    
fscanf(STDIN,"%d\n",$n);

    $a=trim(fgets(STDIN));
        $in=explode(" ",$a);
        for($i=0;$i<$n;$i++){
        $sub=$in[$i]-$i;
        $sum1=$sum1+$in[$i];
        $sum2=$sum2+abs($sub);
    }
    if(($sum1-$sum2)%$n==0)
        echo $sum1-$sum2."\n";
    else{
        $s=$sum1-$sum2+1;
    echo $s."\n";
    }
}





?>