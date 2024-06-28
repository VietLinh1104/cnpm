<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include(ROOT_PATH.CORE_PATH.'actor/User.php');

    class SinhVien extends User{
        private $maSV;
        private $GPA;
        public function __construct($maSV, $fullname, $gender, $email, $GPA) {
            parent::__construct($fullname, $gender, $email);
            $this->maSV = $maSV;
            $this->$GPA = $GPA;
        }

        public function getMaSV(){
            return $this->maSV;
        }

        public function setMaSV($maSV){
            $this->maSV = $maSV;
        }

        public function getGPA(){
            return $this->GPA;
        }

        public function setGPA($GPA){
            $this->GPA = $GPA;
        }

    }
?>