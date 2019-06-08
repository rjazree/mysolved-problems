<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$s);
    
        for($i=1;$i<=$s;$i++){
            $flag=0;
            fscanf(STDIN,"%d\n",$n);
                if($n==0)
                    $flag=0;

                else{
                    for($j=1;$j<=32;$j++){
                        $a=$j*$j;
                        if($a==$n){
                            $flag=0;
                            break;
                        }
                        else
                        $flag++;
                    
                    }
                }
        if($flag==0)
        echo "Case ".$i.": YES\n";
        else
        echo "Case ".$i.": NO\n";

        }