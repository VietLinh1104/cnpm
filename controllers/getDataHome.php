<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/variable.php');
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');
    $importAc = new Import('usecase');
    $importAuthen = new Import('authen');

    function getDataHome(){
        if(IsAuthen::isAuthen()){
            if($_SESSION['roleUser'] == 'QL'){
                $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                $table = 'users';
    
                $result = $dbHandler->getAllData($table);


                if (!empty($result)) {
                    foreach ($result as $row) {
                        return $row['fullname'] ;
                    }
                } else {
                    echo 'Không tìm thấy dữ liệu phù hợp.';
                }

            }
        }

    }
?>