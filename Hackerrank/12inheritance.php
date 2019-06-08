<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

class person {
    public $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        echo $this->lastName;

        //print("Name: {$this->lastName}, {$this->firstName}\n");
        //print("ID: {$this->id}\n");
    }
}
class Student extends person {
    private $testScores;
    public $firstName, $lastName, $id;

    

    public function __construct($first_name, $last_name, $identification,$testScore) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;      
        $this->s1 = $testScore;

        for($i=0;$i< $this->s1;$i++){


        }

        //$this->s1 = $s1;

    }


    /*	
    *   Class Constructor
    *   
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    // Write your constructor here

    /*	
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
}

$obj=new Student("taz","jahan","1","2");
$obj->person()=$obj->Student();
$obj->printPerson();