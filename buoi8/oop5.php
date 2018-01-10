<?php
abstract class A{
    public $name = "KPT";
    function getA(){
        echo "a";
    }
    abstract function returnName();
    abstract function returnValue();
}


class AA extends A{
    
    function getA(){
        //echo "aaaaaaa";
    }
    function returnName($name = 2112){
        return 'text';
    }
    function returnValue(){
        echo "value";
    }
}

$a = new AA;
echo $a->getA();
echo $a->returnName("TI");
?>