<?php
class base{
    public static $name="rahul sarker";

   
}


class derived extends base{
    public static function show(){
        echo parent::$name ." <br>";
    }

}

$ob1=new derived();
$ob1->show();




?>