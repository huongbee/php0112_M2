<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
//file size < 1MB
// 1MB = 1014 kB
// 1kB = 1024 byte 
//chỉ cho phép upload file doc, docx, pdf , xlsx, rtf
//rename

//nếu có tồn tại 1 file bất kì không thể upload, rollback all


$file = $_FILES['myfile'];

echo "<pre>";
print_r($file);
echo '</pre>';

