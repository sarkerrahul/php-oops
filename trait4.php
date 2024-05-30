<?php

trait hello{
    private function sayhello(){
        echo "hello trait" ;
    }
}

class base{
    use hello{
        hello::sayhello as public;  // to use private method;
        //hello::sayhello as public newhello;   for use with rename;

    }

}

$ob1=new base();
$ob1->sayhello();

