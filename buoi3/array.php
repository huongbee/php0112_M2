<?php

$arr = array("soccer",'jump','volleyball','swimming');

$arr2 = array(
    'key1'=>'soccer',
    'key2'=>24,
    'key3'=>array(2,3,5)
);

echo $arr[2];
echo "<hr>";

for($i=0; $i < count($arr);$i++ ){
    echo $arr[$i];
    echo "<br>";
}

echo "<pre>";
print_r($arr2);
echo "</pre>";

echo "<hr>";

foreach($arr2 as $value){
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
$arr3 = $arr2['key3'];
foreach($arr3 as $phantu){
    echo $phantu;
    echo "<br>";
}
echo "<hr>";
foreach($arr2 as $key=>$value){
    echo $key;
    echo "<br>";
}
echo "<hr>";
foreach($arr2 as $value){
    if(gettype($value)=="array"){
        foreach($value as $phantu){
            echo $phantu;
            echo "<br>";
        }
    }
    else {
        echo $value;
        echo "<br>";
    }
}

$str = "Hello World!";
$array = explode(' ',$str);
echo "<pre>";
print_r($array);
echo "</pre>";

$str2 = implode(' ',$array);
echo $str2;

$arr2 = array(
    'key1'=>'soccer',
    'key2'=>24,
    'key3'=>array(2,3,5)
);
// echo "<hr>";
// echo $result = array_search('soccer',$arr2);

$arr3 = [545,3343,45454];
$arr4 = array_merge($arr2,$arr3);
echo "<pre>";
print_r($arr4);
echo "</pre>";

$arr3 = [545,3343,45454];
array_splice($arr3,1,0,'KPT');
echo "<pre>";
print_r($arr3);
echo "</pre>";



$arr3 = [545,3343,45454];
$arr5 = [9,8,7];
array_splice($arr3,2,1,$arr5);

echo "<pre>";
print_r($arr3);
echo "</pre>";



echo "<br><br><br><br><br><br><br><br><br><br><br>";
?>