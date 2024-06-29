<?php
    class QuanLyKhoa{
        private $khoa;
        private $khoa_id;
        private $maKhoa;
    

        public function __construct($khoa,$maKhoa) {
            $this->khoa = $khoa;
            $this->maKhoa = $maKhoa;
            $this->khoa_id = 'KH'.uniqid();
        }

        public function getKhoa(){
            return $this->khoa;
        }

        public function setKhoa($khoa){
            $this->khoa = $khoa;
        }

        public function getKhoa_id(){
            return $this->khoa_id;
        }

        public function setKhoa_id($khoa_id){
            $this->khoa_id = $khoa_id;
        }
        
        public function getMaKhoa(){
            return $this->maKhoa;
        }

        public function setMaKhoa($maKhoa){
            $this->maKhoa = $maKhoa;
        }

        public function addKhoa(){
            try {
                // Chuẩn bị dữ liệu cần chèn vào bảng 'users'
                $data = [
                    'khoa_id' => $this->khoa_id, 
                    'khoa' => $this->khoa,
                    'maKhoa' => $this->maKhoa,
                ];
        
                // Gọi phương thức insertData để chèn dữ liệu vào bảng 'users'
                $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                $table = 'khoa';
                $dbHandler->insertData($table, $data);
        
                echo "Thêm khoa thành công!";
            } catch (PDOException $e) {
                echo "Lỗi khi thêm khoa: " . $e->getMessage();
            }
        
        }
    }
?>