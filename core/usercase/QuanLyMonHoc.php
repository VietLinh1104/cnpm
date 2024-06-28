<?php
    class QuanLyMonHoc{
        private $mon;
        private $maMon;

        public function __construct($mon, $maMon){
            $this->mon = $mon;
            $this->maMon = $maMon;
        }

        public function getMon(){
            return $this->mon;
        }

        public function getMaMon(){
            return $this->maMon;
        }

        public function setMon($mon){
            $this->mon = $mon;
        }

        public function setMaMon($maMon){
            $this->maMon = $maMon;
        }
        
        
    }
?>