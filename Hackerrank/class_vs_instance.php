<?php
class Person{
    public $age;
   public function __construct($initialAge){
        $this->age=$initialAge;
       if($this->age<0){
           echo "Age is not valid, setting age to 0.\n";
           $this->age=0;
            
       }
         // Add some more code to run some checks on initialAge

    }
   public  function amIOld(){
       if($this->age<13)
            echo "You are young.\n";

        else if($this->age>=13 && $this->age<18)
            echo "You are a teenager.\n";
        
        else
            echo "You are old.\n";

            // Do some computations in here and print out the correct statement to the console 

    }
   public  function yearPasses(){
          // Increment the age of the person in here
        $this->age++;
        
    }
   
      
}

    fscanf(STDIN,"%d\n",$test);
        for($i=0;$i<$test;$i++){
            fscanf(STDIN,"%d\n",$age);

            $obj = new Person($age);
            $obj->amIOld();
            for ($j = 0; $j < 3; $j++) {
                $obj->yearPasses();
            }
            $obj->amIOld();
        }