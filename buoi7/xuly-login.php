<?php
session_start();
// if(isset($_SESSION['username'])){

//     echo $_SESSION['username'];
//     //delete 1 session
//     //unset($_SESSION['username']);

//     // delete all session
//     //session_destroy();
// }
// else{
//     echo "ko co session";
// }

if(isset($_POST['btnLogin'])){

    $username = $_POST['usr'];
    $password = $_POST['pwd'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    // admin : 111111
    if($_SESSION['username'] == "admin" && $_SESSION['password'] == '111111'){
        //echo "Login success";
        if(isset($_POST['remember']) && $_POST['remember']==1){
            //nhớ đăng nhập
            setcookie('username',$_SESSION['username'],time()+180);
            setcookie('password',$_SESSION['password'],time()+180);
        }
        header('Location:index.php');
    }
    else{
        $_SESSION['message'] = "Login fail! Try again!";
        header('Location:login.php');
    }
}
else{
    $_SESSION['message'] = "Login fail! Try again!";
    header('Location:login.php');
}



?>