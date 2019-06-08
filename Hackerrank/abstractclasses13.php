<?php
abstract class Book
{
    
    protected $title;
    protected  $author;
    
     function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

class MyBook extends Book{
    protected  $p,$t,$a;
    function __construct($t,$a,$p){
        $this->title=$t;
        $this->author=$a;
        $this->p=$p;
        
    }

    public function display(){
        echo  "Title: " .$this->title;
        
        echo  "Author: " .$this->author;
        
        echo  "Price: ". $this->p;
    }

    

}


$title=fgets(STDIN);
$author=fgets(STDIN);
$price=intval(fgets(STDIN));
$novel=new MyBook($title,$author,$price);
$novel->display();

?>