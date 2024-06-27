<?php
  include_once($_SERVER['DOCUMENT_ROOT'].'/toy/app/config/path.php');
  include(ROOT_PATH . CORE_PATH.'connDB.php');

  

  if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sqlQuery = "DELETE FROM produce WHERE id = '{$id}'";

    echo $sqlQuery; // In ra câu lệnh SQL để kiểm tra

    if ($db->query($sqlQuery) === TRUE) {
        echo '<div class="alert alert-success" role="alert">
                Successful!
              </div><br>';
        echo "<a href=\"".PAGE_PATH."admin/list-item\">Go Back -></a>";
    } else {
        echo '<div class="alert alert-warning" role="alert">
                Delete failed: ' . $db->error . '
              </div>';
       
    }
    header('location:'. PAGE_PATH.'admin/list-item');
  }
?>
