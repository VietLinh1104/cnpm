<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/variable.php');
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');
    $import = new Import('actor');
    $import = new Import('encode');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $hashPassword = Hash::hashPassword($password);

        $registerProcessing = new QuanLy($fullname, $username, $hashPassword, $email);
        $registerProcessing->addQuanLy();

        exit();
    }



?>