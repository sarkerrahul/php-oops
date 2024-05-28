<?php
class people{
    public $name, $age;

    function __construct($n,$a){
        $this->name=$n;
        $this->age=$a;
    }

    function show(){
        echo "the name is: ".$this->name." and age is ".$this->age;
    }
}

$p1=new people("rahul",25);
$p1->show();



?>