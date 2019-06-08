<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%f\n",$a);
$b=fgets(STDIN);
$c=fgets(STDIN);
$a=$a+4;

$c='HackerRank '.$c;
echo $a."\n";
if (strpos($b, '.0') !== false) {
    $d=floatval($b)+floatval(4.0);
    echo $d.".0\n";
}
    else{
        $d=floatval($b)+floatval(4.0);
        echo $d."\n";
    }
echo $c;