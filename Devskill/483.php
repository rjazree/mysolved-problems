<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    $a="never be so happy when you are happy and never be so sad when you are sad";
    $s=explode(" ",$a);
    
    while((fscanf(STDIN,"%s",$in))!=null){

    if (in_array($in, $s)) {
        echo "YES\n";
    }
    else
    echo "NO\n";
}
    
    
    
?>