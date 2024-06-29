<?php
    class QuanLyLop{
        private $lop;
        private $maLop;

        //constructor
        public function __construct($lop, $maLop){
            $this->lop = $lop;
            $this->maLop = $maLop;
        }

        //getters and setters
        public function getLop(){
            return $this->lop;
        }

        public function getMaLop(){
            return $this->maLop;
        }

        public function setLop($lop){
            $this->lop = $lop;
        }

        public function setMaLop($maLop){
            $this->maLop = $maLop;
        }

    }
?>