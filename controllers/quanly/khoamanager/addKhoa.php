<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/variable.php');
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');
    $importAc = new Import('usecase');
    $importAuthen = new Import('authen');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $khoa = $_POST['khoa'];
        $maKhoa = $_POST['maKhoa'];

        if(IsAuthen::isAuthen()){
            if($_SESSION['roleUser'] == 'QL'){

                $usecase = new QuanLyKhoa($khoa,$maKhoa);
            
                $usecase->addKhoa();
        
                header('Location:'.PAGE_PATH.'admin/quanly/khoa/listKhoa');
                exit();
            }
        }

        
    }



?>