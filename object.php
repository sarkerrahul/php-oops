<?php
class one{
public $a,$b,$c;
function sum(){

$this->c= $this->a+ $this->b;
}

}

$ob1= new one;
$ob1->a=10;
$ob1->b=20;
$ob1->sum();
echo "the sum is".$ob1->c;


?>
