<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    $c=1;
    $s=trim(fgets(STDIN));
    $l=strlen($s);
    for($i=0;$i<$l;$i++){
        if(preg_match("/^[A-Z,]+$/",$s[$i]))
        $c++;





    }

    echo $c;