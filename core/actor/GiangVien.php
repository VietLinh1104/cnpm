<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once(ROOT_PATH.CORE_PATH.'actor/Users.php');

    class GiangVien extends Users{
        private $maGV;
        private $chucvu;
        private $khoa;

        //constructor
        public function __construct($fullname, $email, $password, $username, $phone, $birth, $maGV, $chucvu, $khoa){
            parent::__construct($fullname, $email, $password, $username, $phone, $birth);
            $this->maGV = $maGV;
            $this->chucvu = $chucvu;
            $this->khoa = $khoa;
        }

        //getters and setters
        public function getMaGV(){
            return $this->maGV;
        }

        public function setMaGV($maGV){
            $this->maGV = $maGV;
        }
        
        public function getChucVu(){
            return $this->chucvu;
        }

        public function setChucVu($chucvu){
            $this->chucvu = $chucvu;
        }

        public function getKhoa(){
            return $this->khoa;
        }

        public function setKhoa($khoa){
            $this->khoa = $khoa;
        }

    }
?>