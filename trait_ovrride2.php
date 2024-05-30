<?php

trait hello{
    public function hello(){
        echo "hello trait" ;
    }
}

trait hi{
    public function hello(){
        echo "hi trait" ;
    }
}


class base{
    use hello,hi{
        hello::hello insteadof hi;  // to use only hello trait hello();
        hi::hello as newhello;  // as the funtion name are same we can use it by renaming like this
    }
    public function hello(){
        echo "hello base class" ;
    }


}


$ob=new base();  
$ob->hello();
$ob->newhello();





?>