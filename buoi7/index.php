<?php
session_start();
if($_SESSION['username'] == "admin" && $_SESSION['password'] == '111111'){
    echo "Chào bạn ". $_SESSION['username'];

    echo "<br><a href='logout.php'>Đăng xuất</a>";
}
else{
    $_SESSION['message'] = "Bạn vui lòng đăng nhâp";
    header('Location:login.php');
}