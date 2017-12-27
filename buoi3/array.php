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


?>