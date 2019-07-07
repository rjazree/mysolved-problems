<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    while($i=trim(fgets(STDIN))){

    $s = explode(',', $i);


    $a=strrev($s[0]);
    
    $b=strrev($s[1]);
    $sum=(int)($a+$b);
        for($k=0;$k<=strlen((string)($sum))-1;$k++){
            if($sum%10==0)
            $sum=$sum/10;
            else
            break;
        }
    echo strrev((string)$sum)."\n";
    }
  ?>