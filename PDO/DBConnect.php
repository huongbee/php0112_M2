<?php

class DBConnect{
    private $db;
    function __construct(){
        try{
            $this->db = new PDO('mysql:host=localhost;dbname=php0112_banhang','root','');
            $this->db->exec('SET NAMES UTF8');
        }
        catch(PDOException $e){
            echo "Lỗi: ".$e->getMessage();
            die;
        }
    }
   
    //$value = ['huong','21312','huong ngoc','huong@gmail.com']
    function setStatement($sql,$value = []){
        $stmt = $this->db->prepare($sql);

        if(!empty($value)){
            $count = count($value); //4
            for($i = 1; $i<= $count; $i++){
                $stmt->bindParam($i,$value[$i-1]);
            }
        }
        return $stmt;
    }

     // INSERT/UPDATE/DELETE
    function executeQuery($sql,$value = []){
        $stmt = $this->setStatement($sql,$value);
        return $stmt->execute();
    }

    //SELECT 1
    function loadOneRow($sql,$value=[]){
        $stmt = $this->setStatement($sql,$value);
        $check = $stmt->execute();
        if($check){
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        return false;
    }

    //SELECT >1
    function loadMoreRows($sql,$value=[]){
        $stmt = $this->setStatement($sql,$value);
        $check = $stmt->execute();
        if($check){
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        return false;
    }

}

$sql = "SELECT * FROM users WHERE id=? OR username=?";
$value = [ 
    $_GET['id'], 
    $_GET['user'] 
];
$db = new DBConnect;
$result = $db->loadMoreRows($sql,$value);
if($result){
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}
else var_dump($result);

// $sql = "DELETE FROM users WHERE username='khoa11'";
// $db = new DBConnect;
// $result = $db->executeQuery($sql);
// if($result){
//     echo "Success";
// }
// else echo "Error";



// $sql = "INSERT INTO users(username,password,fullname,email) 
//         VALUES (?,?,?,?)";

// $username = $_POST['user'];
// $password = md5(md5($_POST['password']).'pdo'); //'1234568uyfdsdsffh'
// $fullname = $_POST['fullname'];
// $email = $_POST['email'];

// $value = [$username,$password,$fullname,$email];

// $db = new DBConnect;
// $result = $db->executeQuery($sql,$value);
// if($result){
//     echo "Success";
// }
// else echo "Error";


?>