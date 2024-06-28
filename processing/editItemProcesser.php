<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');

include(ROOT_PATH. CORE_PATH.'connDB.php');
include(ROOT_PATH. CORE_PATH.'uploadFile.php');
include(ROOT_PATH. CORE_PATH.'createDirectory.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $modelName = $_POST['modelName'];
    $brandName = $_POST['brandName'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $fileItem = "imgPath";

    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $newdirItem = uploadFile($fileItem, $id);

        $sqlQuery = "
            UPDATE produce
            SET modelName = '$modelName',
                brandName = '$brandName',
                price = '$price',
                category = '$category',
                imgPath = '$newdirItem'
            WHERE id = '$id'
        ";

        if($db->query($sqlQuery) == TRUE){
            echo "Data update successfully";
        }else{
            echo "Error: ".$db->error;
        }
    
        $db->close();

        header('location:'. PAGE_PATH.'admin/list-item');
        
    }

}


?>