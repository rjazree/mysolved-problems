<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    fscanf(STDIN,"%d\n",$t);

        for($k=1;$k<=$t;$k++){

            $in=trim(fgets(STDIN));
            $a=explode(" ",$in);
            
            $l=$a[0];
            $r=$a[1];
            $flag=0;
        
            $s="";
            for($i=2;$i<=sqrt($r);$i++){
                for($j=2;$j<=sqrt($r);$j++){
                    
                        $p=pow($i,$j);
                        
                        if($p>$r)
                            break;
                        //echo "power".$p."\n";
                        if(($p>=$l && $p<$r) || ($p>$l && $p<=$r)){
                        
                            if(strpos($s, (string)$p) === false)//checking if the value was considered previously
                            $flag++;

                        }
                        $s.=(string)$p;
                            
                        
                

                }
                
                    
                //   echo "k".$k;
                
            
            // $flag=0;
            }
            //echo "\n".$s." ";
            echo "Case ".$k.": ".$flag."\n";
            
        }