<?php

// $str = "Hello ";
// echo strlen($str); 

// echo "<br>";
// $str = trim($str);
// echo strlen($str); 

// $str = "Luôn luôn lắng nghe";
// $result = stripos($str,'luôn'); 
// echo $result;

// 2018/1/1 14:45:24

// 1/1/2018

$timestamp = strtotime('2018/1/1 14:45:24');

//echo date('d/m/Y : H:i:s',$timestamp);

echo date_default_timezone_get(); //lay timezone

date_default_timezone_set('Asia/Ho_Chi_Minh');

echo "<br>";
echo date_default_timezone_get();

echo "<br>";
echo date('d/m/Y : H:i:s');



$date = getdate();

echo "<pre>";
print_r($date);
echo "</pre>";



?>