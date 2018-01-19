<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=php0112_banhang','root','');
    $db->exec('SET NAMES UTF8');
}
catch(PDOException $e){
    echo "Lỗi: ".$e->getMessage();
    die;
}
// DELETE FROM users WHERE id = 43
//var_dump($db);
//$sql = "DELETE FROM users WHERE id = 44";
//$sql = "DELETE FROM bills WHERE id >= 27";

//cap nhat ten cho user co id = 33 voi ten moi la Nguyen Thu Hong
//$sql ="UPDATE users SET fullname='Nguyen Thu Hong'";

//$sql = "INSERT INTO users(username,password,fullname,birthdate,gender,address,email,phone) VALUES ('huongngoc','123456','Huong Huong Nguyen','2000-12-15','nam','92 Le Thi Rieng','huong011@gmail.com','12345670987')";

//$sql = "SELECT * FROM users";

// $result = $db->exec($sql); 
//var_dump($result);
/**
 *  false: sai thong tin connect or sai cau sql
 *  0: ko co data nao thuc thi
 *  >=1 : so dong data bi thuc thi
 * 
 *  Không sử dụng exec() cho câu SELECT
 */
$sql = "SELECT * FROM users";
$stmt = $db->prepare($sql); //tạo ra statement
$check = $stmt->execute(); //thực thi câu query true/false

if($check){
    $result = $stmt->fetchAll(PDO::FETCH_OBJ); //lấy all data phù hợp với $sql
    
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}




?>