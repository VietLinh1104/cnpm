<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');

class Import {
    public $path;

    public function __construct($files) {
        $this->path = ROOT_PATH . CORE_PATH . $files;
        $this->importData($this->path);
    }

    public function importData($folderPath) {
        // Use glob to get an array of all PHP files in the folder
        $phpFiles = glob($folderPath . '/*.php');

        // Include each PHP file
        foreach ($phpFiles as $file) {
            include_once $file;
        }
       
    }
}
?>
