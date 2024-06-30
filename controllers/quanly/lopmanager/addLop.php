<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/variable.php');
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');
    $importAc = new Import('usecase');
    $importAuthen = new Import('authen');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $lop = $_POST['lop'];
        $maLop = $_POST['maLop'];
        $inputKhoa = $_POST['inputKhoa'];

        if(IsAuthen::isAuthen()){
            if($_SESSION['roleUser'] == 'QL'){

                $usecase = new QuanLyLop($lop,$maLop);

                $data = [
                    'lop_id' => $usecase->getLop_id(),
                    'lop' => $usecase->getLop(),
                    'maLop' => $usecase->getMaLop(),
                    'maKhoa' => $inputKhoa,
                    'tenLop' => $inputKhoa . $usecase->getMaLop() . $usecase->getLop()
                ];

                try {
                    // Chuẩn bị dữ liệu cần chèn vào bảng 'users'
            
                    // Gọi phương thức insertData để chèn dữ liệu vào bảng 'users'
                    $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                    $table = 'lop';
                    $dbHandler->insertData($table, $data);
            
                    echo "Thêm khoa thành công!";
                } catch (PDOException $e) {
                    echo "Lỗi khi thêm khoa: " . $e->getMessage();
                }
        
                echo 'Thêm Lớp thành công';
                // header('Location:'.PAGE_PATH.'admin/quanly/khoa/listLop');
                exit();
            }
        }

        
    }



?>