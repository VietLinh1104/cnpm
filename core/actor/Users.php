<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/variable.php');
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');

    class Users {
        protected $user_id;
        protected $fullname;
        protected $username;
        protected $hashPassword;
        protected $email;
        protected $roleUser;

        
        

        // Constructor
        public function __construct($fullname, $username,$hashPassword,$email, $roleUser) {
            $this->user_id = uniqid();
            $this->fullname = $fullname;
            $this->username = $username;
            $this->hashPassword = $hashPassword;
            $this->email = $email;
            $this->roleUser = $roleUser;
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

        public function getRoleUser() {
            return $this->roleUser;
        }

        public function setRoleUser($roleUser) {
            $this->roleUser = $roleUser;
        }

        public function getUsername() {
            return $this->username;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function addUsers() {
            try {
                // Chuẩn bị dữ liệu cần chèn vào bảng 'users'
                $data = [
                    'user_id' => $this->user_id, 
                    'fullname' => $this->fullname,
                    'username' => $this->username,
                    'hashPassword' => $this->hashPassword,
                    'email' => $this->email,
                    'roleUser' => $this->roleUser
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
