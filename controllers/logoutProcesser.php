<?php
session_start(); // Bắt đầu session nếu chưa có

// Xoá toàn bộ session
session_unset(); // Xoá toàn bộ các biến session
session_destroy(); // Hủy bỏ session

// Chuyển hướng người dùng về trang đăng nhập, ví dụ:
header("Location: /cnpm/app/public/views/admin/login");
exit;
?>