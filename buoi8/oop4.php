<?php

// class SinhVien{
//     public static $name = "Ti";

//     static function getName(){
//         return self::$name; //$this -> self
//     }
//     function setName($ten){
//         self::$name = $ten;
//     }
// }
// $sv1 = new SinhVien;
// $sv1->setName("teo");
// echo $sv1::getName(); //teo

// echo "<br>";

// $sv2 = new SinhVien;
// echo $sv2::getName();

class SinhVien{

    static $class = NULL;

    public function __construct(){
        echo __METHOD__." được khởi tạo. ";
    }

    function getData(){
        return ['PHP','iOS','Android'];
    }
    function init(){
        if(self::$class == NULL){
            echo " chua khoi tao. ";
            self::$class = new SinhVien;
        }
        else {
            echo " da khoi tao";
        }
        return self::$class;
    }
}

// $sv = new SinhVien;
    // $data = $sv->getData();
    // $data = SinhVien::getData();
// print_r($data);
// $sv1 = SinhVien::init();
// echo "<br>";
// var_dump($sv1);

// echo "<hr>";
// $sv2 = SinhVien::init();
// echo "<br>";
// var_dump($sv2);

// echo "<hr>";
// $sv3 = new SinhVien;
// echo "<br>";
// var_dump($sv3);

// echo "<hr>";
// $sv4 = new SinhVien;
// echo "<br>";
// var_dump($sv4);


class A{
    function __construct(){
        echo __METHOD__;
    }
}

class B extends A{
    function __construct(){
        echo __METHOD__;
    }
}

$a = new A; //1
$a2 = new A; //2
//$b = new B;
echo "<br>";
// if($a===$b){
//     echo "a=b";
// }
// else echo "a<>b";
if($a===$a2){
    echo "a=a2"; 
}
else echo "a<>a2";

?>