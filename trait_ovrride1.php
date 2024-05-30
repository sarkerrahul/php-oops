<?php

trait hello{
    public function hello(){
        echo "hello trait" ;
    }
}



class base{
    use hello;
    public function hello(){
        echo "hello base class" ;
    }


}
class derived extends base{
   
    public function hello(){
        echo "hello derived class" ;
    }

}

$ob=new derived();  //it will show the derived class funthon
$ob->hello();// the function priority- derived >>trait>>base class






?>