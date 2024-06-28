<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once(ROOT_PATH.CORE_PATH.'actor/Users.php');

    class QuanLy extends Users{

        public function __construct($fullname, $gender, $email) {
            parent::__construct($fullname, $gender, $email);

        }
    }
?>