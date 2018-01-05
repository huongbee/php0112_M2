<?php
 session_start();

// $_SESSION['username'] = "kpt";

// echo $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    p{
        color:red;
        margin-bottom:20px
    }
</style>
<body>
    <h2>Login Form</h2>

    <?php 
        if(isset($_SESSION['message'])){
            echo '<p>'.$_SESSION['message'].'</p>';
            unset($_SESSION['message']);
        }
            
    ?>
    

    <form action="xuly-login.php" method="post">
        Username:
        <input type="text" name="usr" placeholder="Nhập username">
        <br/><br/>
        Mật khẩu:
        <input type="password" name="pwd" placeholder="Nhập mật khẩu">
        <br/><br/>
        <button type="submit" name="btnLogin">Login</button>
    </form>
</body>
</html>