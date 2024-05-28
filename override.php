<?php
class base{
    public $name="base class";

    public function fn1($a,$b){
        return $a*$b;
    }
}

class derived extends base{
    public $name="derived class";

    public function fn1($a,$b){
        return $a+$b;
    }
}

$obj1= new base;
echo $obj1->fn1(10,5). "<br>";
//echo $obj1->name . "<br>";

$obj2= new derived;
echo $obj2->fn1(10,5);
//echo $obj2->name . "<br>";






?>