<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
   
        $s=trim(fgets(STDIN));
        $k=explode(" ",$s);
        //$a=(string)();
        fprintf(STDOUT,"%0.0f",pow($k[0],$k[1])-pow($k[1],$k[0]));