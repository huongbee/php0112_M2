<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
//file size < 1MB
// 1MB = 1014 kB
// 1kB = 1024 byte 
//chỉ cho phép upload file doc, docx, pdf , xlsx, rtf
//rename

//nếu có tồn tại 1 file bất kì không thể upload, rollback all


$file = $_FILES['myfile'];

$tmpName = $file['tmp_name'];
$name = $file['name'];
$size = $file['size'];

foreach($size as $kichthuoc){
    if($kichthuoc>=1014*1024){
        //khong tm
        echo "File too large";
        die;
    }
}

// echo "<pre>";
// print_r($name);
// echo '</pre>';

// echo "<pre>";
// print_r($tmpName);
// echo '</pre>';

$arrExt = ['doc', 'docx', 'pdf' , 'xlsx', 'rtf'];

foreach($name as $key=>$file){
    $ext = strtolower(pathinfo($file,PATHINFO_EXTENSION));
    if(!in_array($ext,$arrExt)){
        //ko cho phep
        echo "File khong duoc phep chon";
        die;
    }
}

foreach($name as $key=>$file){
    $newName = rand(13232,987654323).'-'.$file;
    move_uploaded_file($tmpName[$key],'uploads/'.$newName);
    
}
echo 'success';