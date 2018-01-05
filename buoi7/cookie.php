<?php


//create
setcookie('user','admin',time()+300); // 5mins

//delete
//setcookie('user','admin',time()-300);

echo $_COOKIE['user'];
?>