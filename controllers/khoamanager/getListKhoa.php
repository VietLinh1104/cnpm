<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/variable.php');
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');
    $importAc = new Import('usecase');
    $importAuthen = new Import('authen');

    function getListKhoa(){
        if(IsAuthen::isAuthen()){
            if($_SESSION['roleUser'] == 'QL'){
                $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                $table = 'khoa';
    
                $result = $dbHandler->getAllData($table);
    
                foreach ($result as $row) {
                    $rowData = [];
                    foreach ($row as $column => $value) {
                        $rowData[$column] = $value;
                    }
                    $twoDimensionalArray[] = $rowData;
                }
                
                // Hiển thị mảng hai chiều
                
                return $twoDimensionalArray;
                
                
                
            }
        }

    }


        
    



?>