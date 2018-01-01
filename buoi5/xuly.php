
<?php
// if(isset($_GET['btnSend'])){
//     echo $name = $_GET['txtFullname'];
//     echo $age = $_GET['txtAge'];
// }


// if(isset($_POST['btnSend'])){
//     echo $name = $_POST['txtFullname'];
//     echo $age = $_POST['txtAge'];
// }


if(isset($_REQUEST['btnSend'])){
    echo $name = $_REQUEST['txtFullname'];
    echo "<br>";

    echo $age = $_REQUEST['txtAge'];
    echo "<br>";

    $file = $_FILES['hinhanh'];
    
    echo "<pre>";
    print_r($file);
    echo "</pre>";
}

?>
