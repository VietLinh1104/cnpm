<?php include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    $importAuthen = new Import('authen');

?>

<div id="sidebar" class="sidebar bg-white border-end">
    <nav class="navbar navbar-expand-lg navbar-white px-1 mb-2">
        <div class="container-fluid p-0">
            <a href="#" class="navbar-brand m-0 d-flex align-items-center">
                <img src="" style="width: 180px" alt="logo">
            </a> 
        </div>
        
    </nav>

    <label for="listGroup" class="fs-14 font-normal- font-family-poppins text-gray-light ms-1 mb-10px">Main Menu</label>

    <?php

        if(IsAuthen::isAuthen()){    
            $role = $_SESSION['roleUser'];
            switch ($role) {
                case "QL":
                    $list = array('Trang chủ'=>'home','Quản lý khoa'=>'quanly/khoa/listkhoa', 'Quản lý lớp'=>'lopManager', 'Quản lý môn học'=>'monManeger');
                  break;
                case "GV":
                    $list = array('Trang chủ'=>'home','Điểm danh'=>'diemDanh', 'Đánh giá rèn luyện'=>'renluyen', 'Quản lý sinh viên'=>'svManager');
                  break;
                case "SV":
                    $list = array('Trang chủ'=>'home','Cập nhật thông tin'=>'updateInfo', 'Đăng ký môn học'=>'dangkyMon', 'Xem điểm'=>'diemSV');
                  break;
                default:
                    $list = array('Trang Chủ'=>'home');
              }

        }else{
            $list = array('Trang Chủ'=>'home');
        }

        foreach ($list as $value => $path) {
            echo'
                <div class="list-group list-group-flush" id="listGroup">
                    <a href="'.PAGE_PATH.'admin/'.$path.'" class="list-group-item  list-group-item-action px-10px mx-1">'.$value.'</a>
                </div>
            ';
        }

    ?>


    

</div>