<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    $importAuthen = new Import('authen');


    if(IsAuthen::isAuthen()){
        
        include(ROOT_PATH.ELEMENTS_PATH.'NavbarIsAuthen.php');
        
    }else{
        include(ROOT_PATH.ELEMENTS_PATH.'NavbarLogin.php');
    }
        

?>