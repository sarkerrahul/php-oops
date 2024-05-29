<?php
interface a{
    function calc($a,$b);
}

interface b{ //no properties
    function sub($x,$y);  // only declaration
    
}

class c implements a,b{   //this is the way 

    public function calc($a,$b){  // here is the function body
        echo $a+$b. "<br>";
    }

    public function sub($x,$y){
        echo $x-$y;
    }

}


$ob1=new c();
$ob1->calc(10,20);
$ob1->sub(30,20);








?>
