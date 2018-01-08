<?php

class SinhVien{
    public $id;
    public $name;

    function setId($mssv){
        $this->id = $mssv;
    }

    function getId(){
        return $this->id;
    }

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }

}

$sv = new SinhVien;
$sv->setId('SV123456');
$sv->name = "Khoa Pham";
//echo $sv->id;
echo $sv->getId();
echo "<br>";
echo $sv->getName();

//var_dump($sv);

echo "<br>";
$sv2 = new SinhVien;
$sv2->setId('SV123');
$sv2->setName("Ti");
$sv2->age = 12; //set

echo $sv2->getId();
echo "<br>";
echo $sv2->getName();
echo "<br>";
echo $sv2->age; //get
//echo $sv2->getAge();

echo "<br>";
var_dump($sv2);



?>