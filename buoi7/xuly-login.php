<?php
session_start();
if(isset($_SESSION['username'])){

    echo $_SESSION['username'];
    //delete 1 session
    //unset($_SESSION['username']);

    // delete all session
    session_destroy();
}
else{
    echo "ko co session";
}




?>