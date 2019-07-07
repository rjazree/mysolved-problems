<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
class Calculator{  
        var $a;
        var $b;
    public function calc($a,$b){
       $this->a=$a;
       $this->b=$b;
                if($this->a<0 || $this->b<0)
                    throw new exception("n and p should be non-negative\n");
               
            
    }

}

fscanf(STDIN,"%d\n",$t);

    for($k=1;$k<=$t;$k++){

            $in=trim(fgets(STDIN));
            $a=explode(" ",$in);
            $my=new Calculator();
            try{
                $my->calc($a[0],$a[1]);
                echo pow($a[0],$a[1])."\n";
            
            }
            catch(Exception $e){
                echo $e->getMessage();

            }
        }