<?php

class SinhVien{

    public $id = '1234';

    function __construct($data){
        //echo $data;
        echo "Construct:<br>Id cua sv la: ".$this->id;
        echo "<br>";
        echo "Class ". get_class($this). " vua khoi tao";
    }

    function getA(){
        echo "<br>";
        echo 2323;
    }

    private function __destruct(){
        //unset($this->id); //huy bien

        echo "<hr>Destruct:<br>";
        echo  "Id cua sv la: ".$this->id;
        echo "<br>";
        echo "Class ". get_class($this). " vua bi huy";
    }

    function getB(){
        echo "<br>";
        echo "BBBB";
    }
    function seeMore(){
        echo get_class($this); //la obj duoc new
        echo "<br>";
        echo get_class(); //của chính  class chứa nó
    }
}

class hocsinh extends SinhVien{

    function __destruct(){
        echo "<br>";
        echo "Class ". get_class($this). " vua bi huy";
    }
    
}
$hs = new hocsinh(2323);
echo "<hr>";
$hs->seeMore();

// $sv = new SinhVien(123);
// $sv->getA();
// $sv->getB();
// echo "<br>";
//var_dump($sv);


