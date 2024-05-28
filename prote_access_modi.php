<?php
class base{
    protected $name;

    public function __construct($n){
        $this->name=$n;
    }

    protected function show(){
        echo"the name from base :".$this->name;
    }


} 

class derived extends base{
    public function get(){
        echo "function from base 2". "<br>";
        echo "the name : ".$this->name;
    }
}


$ob1= new derived("rahul");
$ob1->get();


?>