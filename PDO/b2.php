<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=php0112_banhang','root','');
    $db->exec('SET NAMES UTF8');
}
catch(PDOException $e){
    echo "Lỗi: ".$e->getMessage();
    die;
}

$sql = "INSERT INTO users(username,password,fullname,email) 
        VALUES (?,?,?,?)";

$username = "khoaphamtraining";
$password = md5(md5("123456").'pdo'); //'1234568uyfdsdsffh'
$fullname = "Khoa Pham Training";
$email = "khoaphamtraining@gmail.com";
 
$stmt = $db->prepare($sql);
$stmt->bindParam(1,$username);
$stmt->bindParam(2,$password);
$stmt->bindParam(3,$fullname);
$stmt->bindParam(4,$email);

$check = $stmt->execute();
if($check){
    echo "Thêm thành công, ID của bạn là ".$db->lastInsertId();
}
else echo  "Thêm thất bại";


// $sql = "SELECT * FROM users WHERE username=:user";
    // $stmt = $db->prepare($sql);

    // //$username = 'thuhong';
    // //$stmt->bindParam(1,$username);
    // //$stmt->bindValue(1,'thuhong');

    // $stmt->bindValue(':user','thuhong');

    // $check = $stmt->execute();
    // if($check){
    //     // $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    //     // echo $result[0]->fullname;

    //     $result = $stmt->fetch(PDO::FETCH_OBJ);
    //     echo $result->fullname;

    //     // echo "<pre>";
    //     // print_r($result);
    //     // echo "</pre>"; 
    // }
    // else{ 
    //     echo "Error!";
// }





?>