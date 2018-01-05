<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['username'] == "admin" && $_SESSION['password'] == '111111'){

    echo "session";
    echo "Chào bạn ". $_SESSION['username'];

    echo "<br><a href='logout.php'>Đăng xuất</a>";
}
elseif($_COOKIE['username'] == "admin" && $_COOKIE['password'] == '111111'){
    
    $_SESSION['username'] = $_COOKIE['username'];
    $_SESSION['password'] = $_COOKIE['password'];

    // gia hạn thêm thời gian
    setcookie('username',$_SESSION['username'],time()+180);
    setcookie('password',$_SESSION['password'],time()+180);
    
    echo "cookie";
    echo "Chào bạn ". $_SESSION['username'];
    echo "<br><a href='logout.php'>Đăng xuất</a>";
}
else{
    $_SESSION['message'] = "Bạn vui lòng đăng nhâp";
    header('Location:login.php');
}