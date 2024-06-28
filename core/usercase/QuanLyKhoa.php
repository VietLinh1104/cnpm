<?php
    class QuanLyKhoa{
        private $khoa;
        private $maKhoa;

        public function __construct($khoa, $maKhoa) {
            $this->khoa = $khoa;
            $this->maKhoa = $maKhoa;
        }

        public function getKhoa(){
            return $this->khoa;
        }

        public function setKhoa($khoa){
            $this->khoa = $khoa;
        }

        public function getMaKhoa(){
            return $this->maKhoa;
        }

        public function setMaKhoa($maKhoa){
            $this->maKhoa = $maKhoa;
        }
        
    }
?>