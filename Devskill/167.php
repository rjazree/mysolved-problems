<?php
//not solved
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
    fscanf(STDIN,"%d\n",$c);
    
    function power($v){
        return pow($v,2);

    }

    for($i=1;$i<=$c;$i++){

        fscanf(STDIN,"%d",$n);
        echo "Case ".$i.": ";
        echo (power($n)*power($n+1))/4;
        echo "\n";


}
?>