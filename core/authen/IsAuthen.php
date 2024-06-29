<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/variable.php');
    include_once(ROOT_PATH . CORE_PATH . 'MySQL.php');

    class IsAuthen{
        
        public static function isAuthen(){
            $dbHandler = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME);            
            
            if (session_status() == PHP_SESSION_NONE) {
                session_start(); // Bắt đầu session nếu chưa khởi tạo
            }

            if(isset($_SESSION['user_id']) && $_SESSION['user_id']){
                
                $user_id = $_SESSION['user_id'];
                $result = $dbHandler->getDataByField('users', 'user_id', $user_id);
        
                if (!empty($result)) {
                    foreach ($result as $row) {
                        $id_userSV = $row['user_id'];
                        
                        if($id_userSV == $user_id){
                            return TRUE;
                        }else{
                            // echo "[Core/authen-IsAuthen/if] user_id Không trùng khớp.";
                            return FALSE;
                        }
                    }
                } else {
                    // echo "[Core/authen-IsAuthen/if] Không tìm thấy user_id trên DB.";
                    return FALSE;
                }
        
            }else{
                // echo "[Core/authen-IsAuthen/if] Không tìm thấy user_id trên Session.";
                return FALSE;
            }
        }

        

    }

   
?>