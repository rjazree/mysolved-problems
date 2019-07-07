<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
   
    
    $input=trim(fgets(STDIN));
       
        

        $f=0;
        $max=0;
            $integer=$input;
            $ans=(int)$input;

        while($ans>0){
            
           if($ans%2==1){

            $f++;
            if($f>$max)
            $max=$f;

           }
           else
           $f=0;
           $ans=$ans/2;
        }

        echo $max;