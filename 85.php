<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    fscanf(STDIN,"%d\n",$n);
    if($n==29 || $n==30 || $n==28)
    echo "YES\n";
    else
    echo "NO\n";
    ?>