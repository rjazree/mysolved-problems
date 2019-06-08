<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$a);
   // $index=array($name=>$ph))
        for($i=0;$i<$a;$i++){
            $name_ph=trim(fgets(STDIN));
            $arr=explode(" ",$name_ph);
            $name[$i]=$arr[0];
            $ph[$i]=$arr[1];
        }
        
        
        while($n=trim(fgets(STDIN))){
            $flag=0;
            for($i=0;$i<$a;$i++){
                if($n===$name[$i]){
                echo $name[$i]."=".$ph[$i]."\n";
                $flag=1;
                break;
                }
                else
                $flag=0;
                
                    
            }
            if($flag==0)
            echo "Not found\n";





        }






           