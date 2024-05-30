<?php
class base{
    public static $name="rahul sarker";

    public static function show(){
        echo self::$name ." <br>";
    }

    public function __construct($n){
       self::$name=$n;
    }
}

 //the new value is override
 
$ob1=new base("wow");
$ob1->show();




?>