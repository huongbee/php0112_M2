<?php
interface A{
    function getA($name);

}
interface B{
    function getA();
    function getB();
}

class AB implements A,B{
    function getA($name = 1){
        echo $name;
    }
    function getB(){
        echo "b";
    }

    function returnA(){
        echo __METHOD__;
    }
}

$a = new AB;
echo $a->getA();
//$a->returnA();



?>