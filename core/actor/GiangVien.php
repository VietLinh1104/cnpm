<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once(ROOT_PATH.CORE_PATH.'actor/Users.php');

    class GiangVien extends Users{
        private $giangvien_id;
        private $chucvu;
        private $khoa;

        //constructor
        public function __construct($fullname, $email, $password, $username, $phone, $birth, $giangvien_id, $chucvu, $khoa){
            parent::__construct($fullname, $email, $password, $username, $phone, $birth);
            $this->giangvien_id = $giangvien_id;
            $this->chucvu = $chucvu;
            $this->khoa = $khoa;
        }

        //getters and setters
        public function getMaGV(){
            return $this->giangvien_id;
        }

        public function setMaGV($maGV){
            $this->giangvien_id = $maGV;
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