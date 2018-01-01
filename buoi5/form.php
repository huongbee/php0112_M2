<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
    <form method="POST" action="xuly.php" enctype="multipart/form-data">
        <input type="text" name="txtFullname" placeholder="Enter your name" 
            value="<?php echo @$_POST['txtFullname'];?>"    >
        <input type="number" name="txtAge" placeholder="Enter your age" 
            value="<?=@$_POST['txtAge']?>" >

        <input type="file" name="hinhanh" >
        <button type="submit" name="btnSend">Send</button>
    </form>
</body>
</html>