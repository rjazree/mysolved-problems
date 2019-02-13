<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN,"%d\n",$n);
    
for($j=1;$j<=$n;$j++){
    
    fscanf(STDIN,"%d\n",$c);
    $count=0;
    for($i=0;$i<$c;$i++){
        $a=fgets(STDIN);
        $s = array_map('floatval', explode(' ', $a));
        $count=$count+($s[0]*$s[1]);
    }
    fscanf(STDIN,"%d\n",$p);
    echo "Case ".$j.": ".(int)($p-$count)."\n";


}



?>