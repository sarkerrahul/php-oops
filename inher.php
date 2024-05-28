<?php
class employee{
    public $name="no name",$age=24, $salary=24000;

    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    } 
    function show(){
        echo "<h1> Employee Table </h1>";
        echo " <h3> name: </h3>".$this->name. "<br>";
        
        echo " <h3> name: </h3>".$this->age. "<br>";
        echo " <h3> name: </h3>".$this->salary. "<br>";
    }


}


class manager extends employee{
public $ta=1000,$tp=300,$tt;
function show(){
$this->tt= $this->salary+$this->ta+$this->tp;

echo " <h3> name: </h3>".$this->name. "<br>";
echo " <h3> name: </h3>".$this->age. "<br>";
echo " <h3> name: </h3>".$this->tt. "<br>";
}


}


$em1=new manager("rahul",25,27000);
$em1->show();


$em2=new employee("krishna",22,21000);
$em2->show();




?>