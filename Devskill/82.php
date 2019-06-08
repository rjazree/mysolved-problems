<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$c);
    for($i=0;$i<$c;$i++){
        fscanf(STDIN,"%d\n",$in);
        if($in>=120)
        echo "Good Boy Sifat\n";
        else
        echo "Naughty Boy Sifat\n";

}

?>