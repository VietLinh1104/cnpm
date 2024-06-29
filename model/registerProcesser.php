<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/variable.php');
    include_once(ROOT_PATH. CORE_PATH. 'MySQL.php');
    $importAc = new Import('actor');
    $importAuthen = new Import('authen');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $hashPassword = Hash::hash($password);

        $registerProcessing = new QuanLy($fullname, $username, $hashPassword, $email);
        $registerProcessing->addQuanLy();

        header('Location:'.PAGE_PATH.'admin/register');
        exit();
    }



?>