<?php
    function uploadFile($fileType, $id){


        if (isset($_FILES[$fileType]) && $_FILES[$fileType]["error"] == 0) {
            $filename = $_FILES[$fileType]["name"];
            $filetype = $_FILES[$fileType]["type"];
            $filesize = $_FILES[$fileType]["size"];
            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
    
            $newFilename =  $fileType.".". $fileExtension;
    
            
            $idPath = createDirectory("upload/".$id."/");
    
            $success = move_uploaded_file($_FILES[$fileType]["tmp_name"], "upload/".$id."/". $newFilename);

            $filePath = $id."/". $newFilename;

            if ($success) {
                return $filePath;
            } else {
                // Xử lý khi di chuyển tệp tin không thành công
                echo "Di chuyển tệp tin không thành công.";
                return false;
            }
        }
    }
?>
