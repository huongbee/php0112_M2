<?php

//file size < 1MB
// 1MB = 1014 kB
// 1kB = 1024 byte 

// 84771 byte



//chỉ cho phép upload file doc, docx, pdf
//rename 
if($_FILES['my-file']['name']!='' && $_FILES['my-file']['error'] == 0){

    $file = $_FILES['my-file'];
    if(){
        
    }
    //print_r($file);
}
else{
    echo "Bạn chưa chọn file";
    echo "<br><a href='form.php'>Trở về</a>";
}


?>