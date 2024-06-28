<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include(ROOT_PATH.CORE_PATH.'actor/User.php');

    class QuanLy extends User{

        public function __construct($fullname, $gender, $email) {
            parent::__construct($fullname, $gender, $email);

        }
    }
?>