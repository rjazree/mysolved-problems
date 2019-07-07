<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');


    
    fscanf(STDIN,"%d\n",$n);
    
  
for ($i=$n; $i>=1; $i--) {    
  for($j=0; $j<=$i; $j++) {    
     echo ' ';    
  }  
  $j--;  
for ($k=0; $k<=($n-$j); $k++) {    
    echo "#";   
}    
echo "\n";  
} 