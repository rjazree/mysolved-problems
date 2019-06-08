<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
   
        $s=trim(fgets(STDIN));
        $k=explode(" ",$s);
        echo $k[0]+$k[1];
