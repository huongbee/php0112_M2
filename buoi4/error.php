<?php

function divice($n){
    if($n==0){
        throw new Exception('Vui long nhap so khac 0');
    }
    else return 1/$n;
}

try{
    echo divice(0);
}
catch(Exception $e){
    echo $e->getMessage();
}

//echo 1/0;

?>