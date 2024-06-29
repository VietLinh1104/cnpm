<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once(ROOT_PATH.CORE_PATH.'actor/Users.php');

    class GiangVien extends Users{
        private $giangvien_id;
        private $chucvu;
        private $khoa;
        private $ROLE = 'GV';

        //constructor
        public function __construct($fullname='', $username='', $hashPassword='', $email='', $chucvu='', $khoa=''){
            parent::__construct($fullname,  $username, $hashPassword, $email, $this->ROLE);
            $this->giangvien_id = $this->ROLE . $this->getUser_id();
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

        public function addGianVien() {
        
            try {
                $this->addUsers(); // Gọi phương thức để thêm Users vào bảng 'users'
                
                // Dữ liệu cần chèn vào bảng 'quanly'
                $data = [
                    'giangvien_id' => $this->giangvien_id,
                    'user_id' => $this->getUser_id(),
                    'chucVu' => $this->chucvu,
                    'khoa' => $this->khoa
                ];
            
                // Gọi phương thức insertData để chèn dữ liệu vào bảng 'quanly'
                $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME); // Thay thế các thông số kết nối tại đây
                $table = 'giangvien';
                $dbHandler->insertData($table, $data);
                
                // Sử dụng JavaScript để ghi thông điệp vào bảng điều khiển của trình duyệt
                echo "<script>console.log('[Core/Actor-GiangVien] Thêm giảng viên thành công!');</script>";
            } catch (PDOException $e) {
                // Sử dụng JavaScript để ghi thông điệp lỗi vào bảng điều khiển của trình duyệt
                echo "<script>console.error('[Core/Actor-GiangVien] Lỗi khi thêm giảng viên: " . $e->getMessage() . "');</script>";
            }

        }

        
    }

?>