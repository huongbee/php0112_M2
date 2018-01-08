<?php

class SinhVien{

    public $id = '1234';

    function __construct($data){
        //echo $data;
        echo "Construct:<br>Id cua sv la: ".$this->id;
        echo "<br>";
        echo "Class ". get_class(). " vua khoi tao";
    }

    function getA(){
        echo "<br>";
        echo 2323;
    }

    function __destruct(){
        //unset($this->id); //huy bien

        echo "<hr>Destruct:<br>";
        echo  "Id cua sv la: ".$this->id;
        echo "<br>";
        echo "Class ". get_class(). " vua bi huy";
    }

    function getB(){
        echo "<br>";
        echo "BBBB";
    }
}

class hocsinh extends SinhVien{

}
$hs = new hocsinh(2323);

// $sv = new SinhVien(123);
// $sv->getA();
// $sv->getB();
// echo "<br>";
//var_dump($sv);


