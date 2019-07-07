<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$a);
    fscanf(STDIN,"%d\n",$b);
    fscanf(STDIN,"%d\n",$c);
    $tip=$b/100*$a;
    
    $tax=$c/100*$a;
    $ans=(int)($a+$tip+$tax);
    echo $ans+1;
  //  if((($ans-(int)$ans))>=0.5)
    //echo (int)($ans+1);
    //else
   