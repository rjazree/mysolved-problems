<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    //ini_set('precision', 19);
    //phfscanf(STDIN,"%d%d\n",$n);
    $s=trim(fgets(STDIN));
    $a=explode(" ",$s);
    $foo= ($a[0])/($a[1]);
     echo round($foo, 25) ;
