<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');  

    function recur($a,$b,$c){
        if(($a>$b) && ($a>$c)){
            if($b>$c)
                return ($b*2)+$c;
            else
                return ($c*2)+$b;
        }
            
        
        else if($b>$a && $b>$c){
            if($a>$c)
                return ($a*2)+$c;
            else
                return ($c*2)+$a;


        }
            
        
        else if($c>$a && $c>$b){

            if($a>$b)
                return ($a*2)+$b;
            else
                return ($b*2)+$a;
        }
        else 
            return ($a+$b+$c);



    }


    $n=trim(fgets(STDIN));
    $in=explode(" ",$n);
    $a=(int)$in[0];
    $b=(int)$in[1];
    $c=(int)$in[2];

    echo (string)(recur($a,$b,$c));
