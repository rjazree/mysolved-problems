<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$t);
    for($j=0;$j<$t;$j++){
    
    
    fscanf(STDIN,"%d\n",$n);
    $s=log($n)/log(5);
    //echo $s;
    if( $s>=0 && strval($s) === strval(intval($s)))
    echo "YES\n";
    else
    echo "NO\n"; 
    }