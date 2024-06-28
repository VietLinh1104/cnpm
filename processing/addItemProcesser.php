<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
include(ROOT_PATH. CORE_PATH.'connDB.php');
include(ROOT_PATH. CORE_PATH. 'uploadFile.php');
include(ROOT_PATH. CORE_PATH. 'createDirectory.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = md5(uniqid('', true));

    // Nhận dữ liệu từ form
    $modelName = $_POST['modelName'];
    $brandName = $_POST['brandName'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $fileItem = "img-produce";

    $newdirItem = uploadFile($fileItem, $id);

    $sqlQuery = "INSERT INTO produce VALUES ('$id','$modelName','$brandName','$price','$category','$newdirItem',NOW(),NOW())";

    if($db->query($sqlQuery)==TRUE){
        echo "New record created successfully";
    }else{
        echo "Error: ".$db->error;
    }

    $db->close();

    // Kiểm tra và in ra dữ liệu
    
    header('location:'. PAGE_PATH.'admin/list-item');

    }
?>