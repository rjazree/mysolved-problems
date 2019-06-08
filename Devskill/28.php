<?php
//not solved
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
  
    fscanf(STDIN,"%d\n",$in);
    for($i=0;$i<$in;$i++){
    
    $a=fgets(STDIN);
    $s = array_map('floatval', explode(' ', $a));
    //echo $s[1];
    $r=floor($s[1]);
    $p=floor(sqrt(2*pow($s[0],2)));
    if($r==$p)
    echo "Yes\n";
    else
    echo "No\n" ;
}
    
?>



