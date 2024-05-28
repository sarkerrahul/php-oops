<?php
class base{
    public $name;

    function __construct($n){
        $this->name=$n;
    }


}

class base2 extends base{
    public function show(){
        echo "function from base 2". "<br>";
        echo "the name : ".$this->name;
    }
}


$ob1= new base2("rahul");
$ob1->show();


?>