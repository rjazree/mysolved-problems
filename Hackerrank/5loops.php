<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');


fscanf($stdin, "%d\n", $n);

for($i=1;$i<=10;$i++){
    echo "$n x $i = ".$n*$i."\n";






}