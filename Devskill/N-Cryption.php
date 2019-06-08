<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

for($i=2;$i<10;$i++){
    for($j=2;$j<10;$j++)
        if($i%$j)
        echo $i."-prime\n";
        

}







?>