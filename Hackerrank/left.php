<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$a);
   // $index=array($name=>$ph))
       
            $name_ph=trim(fgets(STDIN));
            $arr=explode(" ",$name_ph);

    

    for($i=0;$i<2;$i++){
        $temp=$arr[0];
        $arr[strlen($a)-1]=$temp;
        for($j=0;$j<4;$j++){
       
        $arr[$j+1]=$arr[$j];
        
        }
    }
    for($i=0;$i<$a;$i++){
        echo $arr[$i]." ";

    }