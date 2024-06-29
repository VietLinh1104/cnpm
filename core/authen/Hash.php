<?php
class Hash {
    // Hàm mã hóa mật khẩu
    public static function hash($password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    // Hàm xác thực mật khẩu
    public static function verify($password, $hashedPassword) {
        return password_verify($password, $hashedPassword);
    }
}