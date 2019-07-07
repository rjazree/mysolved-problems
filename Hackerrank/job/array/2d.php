<?php


$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

    $k=array(array());
    $r=array();
    for($i=0;$i<6;$i++){
      $in=trim(fgets(STDIN));
      $r=explode(" ",$in);
      for($j=0;$j<6;$j++)
        $k[$i][$j]=$r[$j];

    }

    $s=-63;
    for($i=0;$i<6;$i++){
        
        for($j=0;$j<6;$j++){
            if($j+2 < 6 && $i+2 < 6 )
            $sum=$k[$i][$j]+$k[$i][$j+1]+$k[$i][$j+2] + $k[$i+1][$j+1] + $k[$i+2][$j] + $k[$i+2][$j+1] + $k[$i+2][$j+2];

        }
        if($sum>$s)
        {
       // echo "sum : ".$sum."\n";
        $s=$sum;
        }
    }

    echo $s;