<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%d\n",$n);
//taking input after testcase
for($test=1;$test<=$n;$test++){
  
$input = trim(fgets(STDIN));
       // $split=str_split($input);
        $split = explode(" ", $input); 
        $ab=$split[0];
        $bc=$split[1];
        $cd=$split[2];
        $ac=sqrt(pow($ab,2)+pow($bc,2));
        //echo $ac."\n";
        $ad=sqrt(pow($ac,2)+pow($cd,2));
        $ans=round($ad,2);
        $formatedNumber = number_format($ans, 2, '.', '');
echo $formatedNumber."\n";

}









?>