<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/variable.php');
include_once(ROOT_PATH . CORE_PATH . 'MySQL.php');
$importAuthen = new Import('authen');

session_start(); // Bắt đầu session

// Khởi tạo kết nối đến cơ sở dữ liệu
$dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Dữ liệu từ form đăng nhập (tạm thời)
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        // Lấy thông tin người dùng từ cơ sở dữ liệu
        $result = $dbHandler->getDataByField('users', 'username', $username);

        if (!empty($result)) {
            foreach ($result as $row) {
                $usernameSV = $row['username'];
                $fullnameSV = $row['fullname'];
                $user_id = $row['user_id'];
                $role = $row['roleUser'];
                $passwordSV = $row['hashPassword'];

                // Kiểm tra mật khẩu
                if (password_verify($password, $passwordSV)) {
                    // Lưu thông tin vào session
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['roleUser'] = $role;
                    echo "[Model-loginProcessing/if] Đăng nhập thành công.";
                    header("Location: /cnpm/app/public/views/admin/home");
                } else {
                    echo "[Model-loginProcessing/if] Mật khẩu không đúng.";
                }
            }
        } else {
            echo "[Model-loginProcessing/if] Không tìm thấy username '".$username."'.";
        }

    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
        echo "[Model-loginProcessing/try] Không tìm thấy username '".$username."'.";
    }
}


?>
