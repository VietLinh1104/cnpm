<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/variable.php');
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');

    class Users {
        protected $user_id;
        protected $fullname;
        protected $email;
        protected $role;

        // Constructor
        public function __construct($fullname, $email, $role) {
            $this->user_id = uniqid();
            $this->fullname = $fullname;
            $this->email = $email;
            $this->role = $role;
        }

        // Getters and setters
        public function getUser_id() {
            return $this->user_id;
        }

        public function getFullname() {
            return $this->fullname;
        }

        public function setFullname($fullname) {
            $this->fullname = $fullname;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getRole() {
            return $this->role;
        }

        public function setRole($role) {
            $this->role = $role;
        }

        public function addUsers() {
            try {
                // Chuẩn bị dữ liệu cần chèn vào bảng 'users'
                $data = [
                    'user_id' => $this->getUser_id(), // Lấy user_id từ lớp cha
                    'fullname' => $this->getFullname(),
                    'email' => $this->getEmail(),
                    'roleUser' => $this->getRole() // hoặc 'QL' nếu bạn muốn chuyển trực tiếp.
                ];
        
                // Gọi phương thức insertData để chèn dữ liệu vào bảng 'users'
                $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                $table = 'users';
                $dbHandler->insertData($table, $data);
        
                echo "Thêm người dùng thành công!";
            } catch (PDOException $e) {
                echo "Lỗi khi thêm người dùng: " . $e->getMessage();
            }
        }
    }

?>
