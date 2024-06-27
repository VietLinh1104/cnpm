<?php
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