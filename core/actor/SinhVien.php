<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once(ROOT_PATH.CORE_PATH.'actor/Users.php');

    class SinhVien extends Users{
        private $sinhVien_id;
        private $GPA;
        public function __construct($maSV, $fullname, $gender, $email, $GPA) {
            parent::__construct($fullname, $gender, $email);
            $this->sinhVien_id = $maSV;
            $this->$GPA = $GPA;
        }

        public function getMaSV(){
            return $this->sinhVien_id;
        }

        public function setMaSV($maSV){
            $this->sinhVien_id = $maSV;
        }

        public function getGPA(){
            return $this->GPA;
        }

        public function setGPA($GPA){
            $this->GPA = $GPA;
        }

    }
?>