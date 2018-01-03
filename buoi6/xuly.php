<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
//file size < 1MB
// 1MB = 1014 kB
// 1kB = 1024 byte 

// 84771 byte

//chỉ cho phép upload file doc, docx, pdf , xlsx, rtf

//rename 

$error = '';
if(isset($_FILES['my-file']['name']) && $_FILES['my-file']['error'] == 0){

    $file = $_FILES['my-file'];
    
    $size = $file['size']; //byte
    if($size < 1024*1024){
        //thoả mãn
        //print_r($file);
        $name = $file['name'];
        $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
        $arrExt = ['doc', 'docx', 'pdf' , 'xlsx', 'rtf'];

        if(in_array($ext,$arrExt)){
            //cho phep
            //a.doc
            $newName = date('Y-m-d-H-i-s').'-'.$name;
            move_uploaded_file($file['tmp_name'],"uploads/$newName");
            echo "Upload successfully";
        }
        else{
            $error =  "File không được phép chọn";
        }

    }
    else{
        $error =  "File quá lớn, vui lòng chọn file có kích thước < 1MB";
    }
    
}
else{
    $error = "Bạn chưa chọn file";
}

if($error != ''){
    echo $error;
    echo "<br><a href='form.php'>Trở về</a>";
}

?>