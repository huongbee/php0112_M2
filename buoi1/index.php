<?php
//echo "Hello World!";

// $bool = true;
// $int = 12; 
//echo $bool;
//print_r($int);
//echo gettype($bool);

//var_dump($int);

// $str = 'Hello World!';
// echo $str;
/**
 *  
 * 
 * 
 * 
 */
// $arr3 = ['hoten'=>'Nguyen Van A', 'tuoi'=>20];
// $arr2 = ['PHP', 'iOS','NodeJS', $arr3];

// $arr = array("Khoa Pham", "Hoa", 12, "phantu4"=>true, $arr2);
// //echo $arr;
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// echo $arr[0];
// echo "<br/>";

// echo $arr[3][2];
// echo "<br/>";
// echo $arr[3][3]['hoten'];



// $arr3 = ['hoten'=>'Nguyen Van A', 'tuoi'=>20];
// $json = json_encode($arr3); //từ array->json
// //echo $json;


// $arr4 = json_decode($json,true); //từ json->array
// echo "<pre>";
// print_r($arr4);
// echo "</pre>";


// class hocsinh{
//     public $hoten = "Ban A";
//     public $tuoi = 20;
// }

// $obj = new hocsinh;
// //var_dump($obj);
// echo $obj->hoten;
// echo "<br/>";
// echo $obj->tuoi;

// $a = 1;
// $a = 2;
// echo $a;

//define('pi',3.14);

//define('pi',3.16);//không được định nghĩa lại 
//echo pi;
//$r = 10;

//Cho bán kính r=10, pi=3.14, tính C, S của hình tròn trên 

/**
 * In ra màn hình như sau:
 * - Chu vi hình tròn bán kính 10 là: ....
 * - Diện tích htron bán kính 10 là:  .... 
 * 
 */
$r = 100;
define('pi',3.14);
$c = 2*pi*$r;
$s = pi*$r*$r;
echo "- Chu vi hình tròn bán kính ".$r." là: $c";
echo "<br>";
echo "- Diện tích htron bán kính $r là: $s";

?>


