<?php

class SinhVien{
    public static $name = "Ti";

    static function getName(){
        return self::$name; //$this -> self
    }
    function setName($ten){
        self::$name = $ten;
    }
}
$sv1 = new SinhVien;
$sv1->setName("teo");
echo $sv1::getName(); //teo

echo "<br>";

$sv2 = new SinhVien;
echo $sv2::getName();


?>