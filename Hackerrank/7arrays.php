<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%d\n",$a);
$in=trim(fgets(STDIN));
$l=strlen($in);
$arr=explode(" ",$in);
for($i=count($arr)-1;$i>=0;$i--){

    echo $arr[$i];
    echo " ";

}