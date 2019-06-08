<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
$alice=0;
$bob=0;
$a_temp = trim(fgets(STDIN));
$a = explode(" ",$a_temp);
$b_temp = trim(fgets(STDIN));

$b = explode(" ",$b_temp);

if($a[0]>$b[0])
    $alice++;
else if($b[0]>$a[0])
    $bob++;  

      
if($a[1]>$b[1])
    $alice++;
else if($b[1]>$a[1])
    $bob++;
    
if($a[2]>$b[2])
    $alice++;
else if($b[2]>$a[2])
    $bob++;
echo $alice." ".$bob;
