<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=php0112_banhang','root','');
    $db->exec('SET NAMES UTF8');
}
catch(PDOException $e){
    echo "Lỗi: ".$e->getMessage();
    die;
}

$sql = "SELECT * FROM users WHERE username=:user";
$stmt = $db->prepare($sql);

//$username = 'thuhong';
//$stmt->bindParam(1,$username);
//$stmt->bindValue(1,'thuhong');

$stmt->bindValue(':user','thuhong');

$check = $stmt->execute();
if($check){
    // $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    // echo $result[0]->fullname;

    $result = $stmt->fetch(PDO::FETCH_OBJ);
    echo $result->fullname;

    // echo "<pre>";
    // print_r($result);
    // echo "</pre>"; 
}
else{ 
    echo "Error!";
}





?>