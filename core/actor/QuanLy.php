<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
include_once(ROOT_PATH.CORE_PATH.'actor/Users.php');

class QuanLy extends Users {
    private $quanLy_id;
    private $ROLE = 'QL';

    public function __construct($fullname, $username, $hashPassword, $email) {
        parent::__construct($fullname,  $username, $hashPassword, $email, $this->ROLE); // Gọi constructor của lớp cha để khởi tạo
        $this->quanLy_id = $this->ROLE . $this->getUser_id(); // Sử dụng phương thức từ lớp cha để lấy user_id
    }

    public function getQuanLy_id() {
        return $this->quanLy_id;
    }

    public function setQuanLy_id($quanLy_id) {
        $this->quanLy_id = $quanLy_id;
    }

    // add quanly
    public function addQuanLy() {
        try {
            $this->addUsers(); // Gọi phương thức để thêm Users vào bảng 'users'
            
            // Dữ liệu cần chèn vào bảng 'quanly'
            $data = [
                'quanLy_id' => $this->quanLy_id,
                'user_id' => $this->getUser_id()
            ];

            // Gọi phương thức insertData để chèn dữ liệu vào bảng 'quanly'
            $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME); // Thay thế các thông số kết nối tại đây
            $table = 'quanly';
            $dbHandler->insertData($table, $data);
            
            echo "Thêm quản lý thành công!";
        } catch (PDOException $e) {
            echo "Lỗi khi thêm quản lý: " . $e->getMessage();
        }
    }

    
}
?>