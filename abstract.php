<?php
abstract class base{  //we can't create of a abstract calass
    

     abstract protected function cal($a,$b); //require a abstract function whis is incomplete


}

class derived extends base{
    public function cal($c,$d){  //body of abstract method public because need to acces outside
        echo $c+$d;

    }

}

$ob1=new derived();
$ob1->cal(10,20);




?>
