<?php

// function inSo(){
//     $num = 10;
//     echo $num;
// }

// function inSo(){
//     $num = 10;
//     return $num;
// }

// echo inSo();

// function inSo($num){
//     echo 2345667;
//     echo "<br>";
//     return $num;

//     echo "KPT";
// }

// echo inSo(10);

// die;

function inSo($number){
    $tmp = '';
    for($i=0;$i<=$number; $i++){
        $tmp.=$i.' ';
    }
    return $tmp;
}

//echo inSo(10);

/**
 

*
**
***
****
*****
****** 
*******



 */


// function inSao($height){
//     $tmp = '';
//     for($i=1;$i<=$height;$i++){
//         echo $tmp.="*";
//         echo "<br>";
//     }
// }
// echo inSao(10);

//10:  2 3 5 7 
//20:  2 3 5 7 11 13 17 19


// function cong(&$a,&$b){
//     $a = 1323;
//     return $b=$a+$b;
// }

// $a = 12;
// $b = 2;
// echo cong($a,$b);
// echo "<br>";
// echo 'a = '.$a;
// echo "<br>";
// echo 'b = '.$b;


function checkSNT($num){
    for($i=2; $i<=sqrt($num); $i++){
        if($num%$i == 0){
            return false;
        }
    }
    return true;
    
}
// var_dump(checkSNT(3));

// die;
function inSNT($n){
    $result = '';
    for($i=2; $i < $n; $i++){
        if(checkSNT($i)){
            $result .= $i. ' ';
        }
    }
    return "Day cac snt < $n la: $result";
}

echo inSNT(100);
?>