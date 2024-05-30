<?php
class base{
    public static $name="rahul sarker";

    public static function show(){
        echo self::$name ." <br>";
    }

    public function __construct(){
       self::show();
    }
}
 //can access without making object
//echo base::$name;  
//echo base::show();


$ob1=new base();
$ob1->show();




?>