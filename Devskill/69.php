<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%d\n",$case);
for($j=0;$j<$case;$j++){
        fscanf(STDIN,"%d\n",$n);
        $s=0;
        $s1=0;
        
        $a=trim(fgets(STDIN));
        $in=explode(" ",$a);
    //    var_dump($in);
        $l= sizeof($in);
        
        for($i=0;$i<$n;$i++){
            $s1=$s1+$in[$i];
        }
        //echo $s1."\n";
        for($i=0;$i<$n;$i++){
            if($in[$i]>$i){
            $k=$in[$i]-$i;
            //echo $k."\n";
            $s=$s+$k;

        }
    
        }    
    
        $ans=$s1-$s;
        echo $ans."\n";
}
?>