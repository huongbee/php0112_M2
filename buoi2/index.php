<?php

// if(1<2){
//     echo "Đúng";
// }
// elseif(2<3){
//      echo 2<3;
// }
// else{
//     echo "Sai";
// }

// switch(10/3){
//     case 1: echo 1; break;
//     case 5: echo 5; break;
//     default: echo "khong co ket qua"; break;
// }
// if(10/3 == 1){
//     echo 1;
// }
// elseif(10/3 == 5) 
//     echo 5;
// else 
//     echo "khong co ket qua";


// for($i=1; $i<=5; $i++){
//     echo $i.' ';
// }

//   * / + - %


// $tong = 0;
// for($i=1; $i<=10; $i++){
//     $tong = $tong+$i;
// }
// echo $tong;


$tong = 0;
for($i=2; $i<=10; $i++){
    if($i%2 == 0){
        $tong+=$i; //$tong = $tong + $i;
    }
}
//echo $tong;

/**
 * $i++  ~  $i = $i+1  ~ $i+=1  ~ ++$i 
 * $i--  ~  $i = $i-1  ~ $i-=1  ~ --$i
 * $i = 3*$i  ~  $i*=3
 * $i = 3+$i  ~  $i+=3
 * 
 * 
 */

$a = 1;
//echo $a++; //2
//echo "<br>";  //3
//echo ++$a;
//echo "<br>";
//echo $a;

$str = "Hello";
$str2 = " World!";

//echo $str.$str2;
echo $str.=$str2; //~$str = $str.$str2 


?>