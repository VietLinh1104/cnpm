<?php
    class QuanLyLop {
        private $lop;
        private $lop_id;
        private $maLop;

        //constructor
        public function __construct($lop, $maLop){
            $this->lop = $lop;
            $this->maLop = $maLop;
            $this->lop_id = 'CL'.$maLop.uniqid();
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

        public function getLop_id(){
            return $this->lop_id;
        }


        public function addLop(){
            try {
                // Chuẩn bị dữ liệu cần chèn vào bảng 'users'
                $data = [
                    'lop_id' => $this->lop_id,
                    'lop' => $this->lop,
                    'maLop' => $this->maLop,
                ];
        
                // Gọi phương thức insertData để chèn dữ liệu vào bảng 'users'
                $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                $table = 'lop';
                $dbHandler->insertData($table, $data);
        
                echo "Thêm khoa thành công!";
            } catch (PDOException $e) {
                echo "Lỗi khi thêm khoa: " . $e->getMessage();
            }
        
        }

    }
?>