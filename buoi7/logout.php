<?php
session_start();
if(isset($_SESSION)){
    session_destroy();
}
if(isset($_COOKIE)){
    setcookie('username',$_SESSION['username'],time()-180);
    setcookie('password',$_SESSION['password'],time()-180);
}

header('Location:login.php');
?>