<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
 
    $in1=trim(fgets(STDIN));
    $in1=explode(" ",$in1);
    $in2=trim(fgets(STDIN));
    $in2=explode(" ",$in2);

    $a=$in1[0];
    $b=$in1[1];
    $c=$in1[2];

    $d=$in2[0];
    $e=$in2[1];
    $f=$in2[2];

    if( $c<$f) 
        $fine=0;

    if(($a>$d && $b<=$e && $c>=$f) )
    $fine=15 * ($a-$d);
    if( $b>$e && $c<=$f)
    $fine=500 * ($b-$e);

    if($c>$f)
     $fine=10000;

     echo $fine;

