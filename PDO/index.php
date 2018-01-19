<?php
try{
    $db = new PDO('mysql:host=localhost;dbname:php0112_banhang','root','');
    $db->exec('SET NAMES UTF8');
}
catch(PDOException $e){
    echo "Lỗi: ".$e->getMessage();
    die;
}
// DELETE FROM users WHERE id = 43
//var_dump($db);

$sql = "DELETE FROM users WHERE id = 43";
$result = $db->exec($sql);

var_dump($result);



?>