<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    fscanf(STDIN,"%d",$n);
    for($j=1;$j<=$n;$j++){
    $count=0;
    $t=0;
    $a=fgets(STDIN);
    $s = array_map('intval', explode(' ', $a));
    if($s[0]>$s[2]){
    $t=$s[0];
    $s[0]=$s[2];
    $s[2]=$t;
    }
    if($s[1]>$s[3]){
        $t=$s[1];
        $s[1]=$s[3];
        $s[3]=$t;
    }


    for($i=$s[0];$i<$s[2];$i++)
    $count++;

    for($i=$s[1];$i<$s[3];$i++)
    $count++;


    echo "Case ".$j.": ".$count."\n";


}
?>