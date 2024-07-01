<?php
    class QuanLyMon{
        private $mon_id;
        private $mon;
        private $maMon;

        public function __construct($mon, $maMon){
            $this->mon = $mon;
            $this->maMon = $maMon;
            $this->mon_id = 'MO'.$maMon.uniqid();
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

        public function getMon_id(){
            return $this->mon_id;
        }

        
        
        
    }
?>