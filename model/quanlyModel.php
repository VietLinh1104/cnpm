<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/variable.php');
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');
    $import = new Import('actor');

    class quanlyModel{


        function __construct(){
        }

        //add Khoa
        public function addKhoa($tenKhoa){
            $dbHandle = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME); 
        }
    }
?>