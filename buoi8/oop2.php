<?php

class SinhVien{
    protected $id = '111';
    private $name = "Teo";

    function setId($mssv){
        $this->id = $mssv;
    }

    public function getId(){
        return $this->id;
    }
}

class HocSinh extends SinhVien{
    //
    private $name = "Nam";
    
    function getId(){
        echo "Id cua hs la: ".$this->id;
    }

    function getName(){
        echo "Ten cua hs la: ".$this->name;
    }
}

$sv = new SinhVien;
$sv->setId('123');
//echo $sv->id; //
echo $sv->getId();

echo '<br>';

$hs = new HocSinh;
echo $hs->getId();

echo '<br>';
echo $hs->getName();

//var_dump($hs);