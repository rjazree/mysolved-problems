<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%d\n",$a);

if($a%2!=0 || ($a%2==0 && (6<=$a && $a<=20)))
    echo "Weird\n";

if($a==2 || $a==4 || ($a%2==0 && $a>20))
echo "Not Weird\n";