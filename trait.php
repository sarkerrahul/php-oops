<?php

trait hello{
    public function hello(){
        echo "hello trait" ;
    }
}


trait bye{
    public function bye(){
        echo "bye trait" ;
    }
}

class a{
    use hello;

}
class b{
    use bye;
    use hello;

}

$ob=new a();
$ob->hello();


$ob2=new b();
$ob2->bye();



?>