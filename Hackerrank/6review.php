<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$a);
    while($a>0){
        $e="";
        $o="";
        
        $in=trim(fgets(STDIN));
        $l=strlen($in);
        $arr=str_split($in,1);
        //var_dump($arr);

        for($i=0;$i<=count($arr)-1;$i++){
            if($i==0 || $i%2==0)
            $e.=$arr[$i];

            else
            $o.=$arr[$i];


        }
    echo $e." ".$o."\n";
    $a--;
    }